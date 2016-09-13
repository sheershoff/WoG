<?php

namespace App\Handlers;

use Adldap\Models\User;

class LdapAttributeHandler
{

    public function email(User $user)
    {
        return strtolower($user->getEmail());
    }

    public function mobile(User $user)
    {
        //dd($user); --view all variable AD
        //dd($user->getAttribute('mobile')[0]);
        return preg_replace('![^\d\+]*!', '', $user->getAttribute('mobile')[0]);
    }

    public function name(User $user)
    {
        $array = explode(' ', $user->getAttribute('description')[0]);
        if (count($array) >= 2) {
            return $array[0] . ' ' . $array[1];
        }
        return $user->getAttribute('description');
    }

}
