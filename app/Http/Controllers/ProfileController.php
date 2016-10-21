<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;


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

}
