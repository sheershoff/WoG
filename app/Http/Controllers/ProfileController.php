<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;

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
        $tempUser = User::withTrashed()->where('login', '=', $request->input('login'))->where('organization_id', '=', $user->organization_id)->first();
        if ($tempUser != null and $tempUser->id != $user->id)
    //        return response()->json([
    //                    'reload' => false,
    //                    'text' => 'Пользователь с таким логином существует.',
    //        ]);
                return 'логин';
        else {
            $tempUser = User::withTrashed()->where('email', '=', $request->input('email'))->where('organization_id', '=', $user->organization_id)->first();
            if ($tempUser != null and $tempUser->id != $user->id)
      //          return response()->json([
    //                        'reload' => false,
    //                        'text' => 'Пользователь с таким email существует.',
    //            ]);
                return 'емейл';
        }
        $user->name = $request->input('name') . ' ' . $request->input('surname');
        $user->login = $request->input('login');
        $user->email = $request->input('email');
        $user->phone_number = $request->input('phone_number');
        $user->save();
  //      return response()->json([
  //          'reload' => TRUE,
  //          'text' => 'Пользователь сохранен',
  //      ]);
        return redirect(url('personal-data'));
    }

}
