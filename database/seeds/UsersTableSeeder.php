<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Vlady',
                'email' => 'Vladimir.Khonin@megafon.ru',
                'password' => '$2y$10$Qh0e.70G8iEyEV704IccxeHC8q53VvSyWXZTDOCQRR081mNJ2ypJe',
                'jiraps' => NULL,
                'remember_token' => NULL,
                'created_at' => '2016-07-28 03:24:24',
                'updated_at' => '2016-07-28 03:24:24',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Руслан',
                'email' => 'ruslan@mail.com',
                'password' => '$2y$10$E/3OahJvTElVLt6i6vT/BOzLEBWxQ6TnR/X8u9pjGFua/jrXR/eYu',
                'jiraps' => NULL,
                'remember_token' => NULL,
                'created_at' => '2016-07-28 07:08:10',
                'updated_at' => '2016-07-28 07:08:10',
            ),
        ));
        
        
    }
}
