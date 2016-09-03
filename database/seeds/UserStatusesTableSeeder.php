<?php

use Illuminate\Database\Seeder;

class UserStatusesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::connection('pgsql')->table('user_statuses')->delete();
        
        \DB::connection('pgsql')->table('user_statuses')->insert(array (
            0 => 
            array (
                'id' => 2,
                'code' => NULL,
                'name' => 'Game over',
                'description' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 1,
                'code' => NULL,
                'name' => 'В Игре',
                'description' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
        ));
        
    	
    }
}
