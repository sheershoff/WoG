<?php

use Illuminate\Database\Seeder;

class UserStatusTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('UserStatus')->delete();
        
        \DB::table('UserStatus')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'В Игре',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Game over',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}
