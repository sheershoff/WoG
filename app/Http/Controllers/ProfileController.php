<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Log;

class ProfileController extends Controller {

    public function personalData() {
        $cash = DB::select('select c.name, b.value, ct.unit '
                        . 'from ' . DB::getTablePrefix() . 'balances b'
                        . ' join ' . DB::getTablePrefix() . 'currencies c on b.currency_id = c.id'
                        . ' join ' . DB::getTablePrefix() . 'currency_types ct on c.currency_type_id = ct.id'
                        . ' where b.user_id = ' . Auth::user()->id);
        $status = DB::select('select r.name'
                        . ' from ' . DB::getTablePrefix() . 'users u'
                        . ' join ' . DB::getTablePrefix() . 'role_user ru on u.id = ru.user_id'
                        . ' join ' . DB::getTablePrefix() . 'roles r on ru.role_id = r.id '
                        . 'where u.id = ' . Auth::user()->id . '');
        return view('personal_data', [
            'status' => $status,
            'cash' => $cash,
        ]);
    }

    public function saveProfile(Request $request) {
        $user = Auth::user();
        if (!config('wog.can_edit_user')) {
            return 'У данной организации отключено редактирование профиля пользователя';
        }

        $validateRules = [
            'name' => 'required',
            'surname' => 'required',
            'login' => 'required',
            'email' => 'required|email',
            'style' => 'required|numeric|in:1,2,3'
        ];

        // do not validate fields that are not allowed to edit
        foreach (config('wog.not_edit_user_fields') as $field) {
            unset($validateRules[$field]);
            if($field == 'name'){
                unset($validateRules['surname']);
            }
        }

        if (sizeof($validateRules) > 0) {
            $this->validate($request, $validateRules);
        }

        $tempUser = User::withTrashed()->where('login', '=', $request->input('login'))->where('organization_id', '=', $user->organization_id)->first();
        if ($tempUser != null && $tempUser->id != $user->id && !in_array('login',config('wog.not_edit_user_fields')))
    //        return response()->json([
    //                    'reload' => false,
    //                    'text' => 'Пользователь с таким логином существует.',
    //        ]);
                return 'логин';
        else {
            $tempUser = User::withTrashed()->where('email', '=', $request->input('email'))->where('organization_id', '=', $user->organization_id)->first();
            if ($tempUser != null && $tempUser->id != $user->id &&  !in_array('id',config('wog.not_edit_user_fields')))
      //          return response()->json([
    //                        'reload' => false,
    //                        'text' => 'Пользователь с таким email существует.',
    //            ]);
                return 'емейл';
        }

        // doesn't fit in the general scheme, so ad-hoc processing
        if(!in_array('name',config('wog.not_edit_user_fields'))) {
            $user->name = $request->input('name') . ' ' . $request->input('surname');
        }

        $editable_columns = [
            'style' => 1,
            'begin_worktime' => '8:30',
            'end_worktime' => '18:00',
            'login' => '',
            'email' => '',
            'phone_number' => '',
            'sub_user1' => '',
            'sub_user2' => '',
            'sub_comment' => '',
            'job_comment' => '',
        ];

        // set editable columns filtered by not_edit config values
        foreach($editable_columns as $column => $value){
            if(!in_array($column,config('wog.not_edit_user_fields'))) {
                $user->$column = $request->input($column, $value);
            }
        }

        if ($user->save())
            return redirect()->back()->with('message', 'Success!');
        return redirect()->back()->with('message', 'False!');
    }

}
