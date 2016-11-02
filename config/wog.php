<?php

return [

    /*
      |--------------------------------------------------------------------------
      | Default Organization
      |--------------------------------------------------------------------------
      |
      |
     */

    'organization' => env('ORGANIZATION', 0),
    'can_edit_user' => 1,
    'not_edit_user_fields' => [
        'name', 
        'surname',
        'login',
        'email',
        'phone_number',
    ],
];
