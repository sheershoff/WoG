<?php

use Illuminate\Database\Seeder;

class TeamUserTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('TeamUser')->delete();
        
        \DB::table('TeamUser')->insert(array (
            0 => 
            array (
                'id' => 1,
                'userId' => 2,
                'teamUserId' => 4,
                'isLeader' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'userId' => 3,
                'teamUserId' => 4,
                'isLeader' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'userId' => 5,
                'teamUserId' => 4,
                'isLeader' => true,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'userId' => 6,
                'teamUserId' => 4,
                'isLeader' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'userId' => 7,
                'teamUserId' => 4,
                'isLeader' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'userId' => 8,
                'teamUserId' => 4,
                'isLeader' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'userId' => 9,
                'teamUserId' => 4,
                'isLeader' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            7 => 
            array (
                'id' => 8,
                'userId' => 10,
                'teamUserId' => 4,
                'isLeader' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}
