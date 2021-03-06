<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

/**
 * @property integer $id
 * @property integer $uni_quest_id
 * @property integer $user_id
 * @property integer $action_id
 * @property integer $mail_template_id
 * @property string $message
 * @property string $created_at
 * @property string $updated_at
 * @property string $deleted_at
 * @property integer $uni_outkey
 * @property Quest $quest
 * @property User $user
 * @property Action $action
 * @property MailTemplate $mailTemplate
 * @property CurrencyTransaction[] $currencyTransactions
 */
class ActionTransaction extends BaseModelWithSoftDeletes
{

    /**
     * @var array
     */
    protected $fillable = ['uni_quest_id', 'user_id', 'action_id', 'mail_template_id', 'message', 'created_at', 'updated_at', 'deleted_at', 'uni_outkey', 'transaction_user_id'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function quest()
    {
        return $this->belongsTo('App\Models\Quest', 'uni_quest_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function action()
    {
        return $this->belongsTo('App\Models\Action');
    }

    public function actionMailTemplate()
    {
        return $this->belongsToMany('App\Models\MailTemplate', 'actions', 'id', 'id', 'action_id')->select('mail_templates.*');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function mailTemplate()
    {
        return $this->belongsToMany('App\Models\MailTemplate');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function currencyTransactions()
    {
        return $this->hasMany('App\Models\CurrencyTransaction', 'action_trancaction_id');
    }

    public static function newActionTransaction($userId, $action_id, $uni_quest_id = null, $uni_outkey = null, $validate = false, $transaction_user = null)
    {
        if (isset($uni_outkey)) {
            //Если есть требование уникальности? то проверяем и если нужно не вставляем
            if (!ActionTransaction::where('uni_outkey', '=', $uni_outkey)->where('uni_quest_id', '=', $uni_quest_id)->count() == 0) {
                return;
            }
        }
        ////////////
        //Проверка на всякое
        //Обязательно поменять текущего пользователя на переменную после передачи пользователя в параметреы!!!111
        ////////////
        $currencies = ActionCurrency::where('action_id', '=', $action_id)->get();
            foreach ($currencies as $cur) {
                if ($validate && !Auth::user()->roleUser->where('role_id', '=', $cur->currency->role_id)->first()) {
                    return redirect()->back()->with('message', 'Role_error');
                }
                $balance = Auth::user()->balances->where('currency_id', '=', $cur->currency_id)->first();

                if ($balance != null) {
                    if ($balance->value + $cur->value < 0)
                        return redirect()->back()->with('message', 'Cash_error');
                }
                else
                if ($cur->value < 0)
                    return redirect()->back()->with('message', 'Cash_error');
            }
        ////////////
        //
        ////////////
        $uq = new ActionTransaction();
        $uq->user_id = $userId;
        $uq->action_id = $action_id;
        if (isset($uni_outkey)) {
            $uq->uni_outkey = $uni_outkey;
            $uq->uni_quest_id = $uni_quest_id;
        }
        if (isset($transaction_user))
            $uq->transaction_user_id = $transaction_user;
        $uq->save(); // <~ this is your "insert" statement
        return redirect()->back()->with('message', 'Success!');
    }

    function save(array $options = [])
    {
        $success = false;

//        if (!empty($this->email)) {
//            $this->email = mb_convert_case($this->email, MB_CASE_LOWER, "UTF-8");
//        }
        DB::beginTransaction();
        $x = $this->action()->first()->mailTemplates()->get();
        if (count($x) > 0) {
            $i = random_int(0, count($x) - 1);
            $this->mail_template_id = $x[$i]->id;
        }
//try {
        $action = $this->action()->first();
        if ($action->close_quest) {
            $userQuest = UserQuest::where('quest_id', '=', $action->quest_id)->where('user_id', '=', Auth::user()->id)->first();
            $userQuest->user_quest_status_id = 3;
            $userQuest->save();
        }
        if ($action->up_role_id != null)
            Auth::user()->addRole([$action->up_role_id]);
        if (parent::save()) {
            $qs = ActionCurrency::where('action_id', '=', $this->action_id)->get();
            foreach ($qs as $q) {
                $uq = new CurrencyTransaction();
                if (isset($this->transaction_user_id) && $q->value > 0)
                    $user = $this->transaction_user_id;
                else
                    $user = $this->user_id;
                $uq->user_id = $user;
                $uq->value = $q->value;
                $uq->currency_id = $q->currency_id;
                $uq->action_currency_id = $q->id;
                $uq->action_trancaction_id = $this->id;
                $uq->save(); // <~ this is your "insert" statement
                $b = Balance::firstOrNew(['user_id' => $user, 'currency_id' => $q->currency_id]);
                $b->value = $b->value + $q->value;
                $b->save();
            }
     //       if (count($x) > 0) {
     //           Mail::send('emails.welcome', ["title" => $this->mailTemplate()->name, "body" => $this->mailTemplate()->body], function($message) {
     //               $message->to(Auth::user()->email, Auth::user()->name)->subject($this->mailTemplate()->code);
     //           });
     //       }

            $success = true;
        }
//} catch (\Exception $e) {
// //maybe log this exception, but basically it's just here so we can rollback if we get a surprise
//}

        if ($success) {
            DB::commit();
            \App\Http\Controllers\WogController::addUserQuests();
            return true; //Redirect::back()->withSuccessMessage('Post saved');
        } else {
            DB::rollback();
            return false; //Redirect::back()->withErrorMessage('Something went wrong');
        }
    }

}
