<?php

use Illuminate\Database\Seeder;

class TeamUsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::connection('pgsql')->table('team_users')->delete();
        
        \DB::connection('pgsql')->table('team_users')->insert(array (
            0 => 
            array (
                'id' => 34,
                'user_id' => 48,
                'team_user_id' => 4,
                'is_leader' => NULL,
                'organization_id' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 33,
                'user_id' => 21,
                'team_user_id' => 58,
                'is_leader' => NULL,
                'organization_id' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 32,
                'user_id' => 20,
                'team_user_id' => 58,
                'is_leader' => NULL,
                'organization_id' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 31,
                'user_id' => 19,
                'team_user_id' => 58,
                'is_leader' => NULL,
                'organization_id' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            4 => 
            array (
                'id' => 30,
                'user_id' => 18,
                'team_user_id' => 58,
                'is_leader' => NULL,
                'organization_id' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            5 => 
            array (
                'id' => 29,
                'user_id' => 17,
                'team_user_id' => 58,
                'is_leader' => NULL,
                'organization_id' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            6 => 
            array (
                'id' => 28,
                'user_id' => 16,
                'team_user_id' => 58,
                'is_leader' => NULL,
                'organization_id' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            7 => 
            array (
                'id' => 27,
                'user_id' => 47,
                'team_user_id' => 68,
                'is_leader' => NULL,
                'organization_id' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            8 => 
            array (
                'id' => 26,
                'user_id' => 43,
                'team_user_id' => 68,
                'is_leader' => NULL,
                'organization_id' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            9 => 
            array (
                'id' => 25,
                'user_id' => 42,
                'team_user_id' => 68,
                'is_leader' => NULL,
                'organization_id' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            10 => 
            array (
                'id' => 24,
                'user_id' => 39,
                'team_user_id' => 68,
                'is_leader' => NULL,
                'organization_id' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            11 => 
            array (
                'id' => 23,
                'user_id' => 38,
                'team_user_id' => 68,
                'is_leader' => NULL,
                'organization_id' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            12 => 
            array (
                'id' => 22,
                'user_id' => 36,
                'team_user_id' => 68,
                'is_leader' => NULL,
                'organization_id' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            13 => 
            array (
                'id' => 21,
                'user_id' => 34,
                'team_user_id' => 68,
                'is_leader' => NULL,
                'organization_id' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            14 => 
            array (
                'id' => 20,
                'user_id' => 33,
                'team_user_id' => 68,
                'is_leader' => NULL,
                'organization_id' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            15 => 
            array (
                'id' => 19,
                'user_id' => 24,
                'team_user_id' => 68,
                'is_leader' => NULL,
                'organization_id' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            16 => 
            array (
                'id' => 18,
                'user_id' => 60,
                'team_user_id' => 67,
                'is_leader' => NULL,
                'organization_id' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            17 => 
            array (
                'id' => 17,
                'user_id' => 50,
                'team_user_id' => 67,
                'is_leader' => NULL,
                'organization_id' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            18 => 
            array (
                'id' => 16,
                'user_id' => 27,
                'team_user_id' => 67,
                'is_leader' => NULL,
                'organization_id' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            19 => 
            array (
                'id' => 15,
                'user_id' => 23,
                'team_user_id' => 67,
                'is_leader' => NULL,
                'organization_id' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            20 => 
            array (
                'id' => 14,
                'user_id' => 22,
                'team_user_id' => 67,
                'is_leader' => NULL,
                'organization_id' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            21 => 
            array (
                'id' => 13,
                'user_id' => 40,
                'team_user_id' => 66,
                'is_leader' => NULL,
                'organization_id' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            22 => 
            array (
                'id' => 12,
                'user_id' => 37,
                'team_user_id' => 66,
                'is_leader' => NULL,
                'organization_id' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            23 => 
            array (
                'id' => 11,
                'user_id' => 35,
                'team_user_id' => 66,
                'is_leader' => NULL,
                'organization_id' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            24 => 
            array (
                'id' => 10,
                'user_id' => 30,
                'team_user_id' => 66,
                'is_leader' => NULL,
                'organization_id' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            25 => 
            array (
                'id' => 9,
                'user_id' => 26,
                'team_user_id' => 66,
                'is_leader' => NULL,
                'organization_id' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            26 => 
            array (
                'id' => 8,
                'user_id' => 10,
                'team_user_id' => 4,
                'is_leader' => NULL,
                'organization_id' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            27 => 
            array (
                'id' => 7,
                'user_id' => 9,
                'team_user_id' => 4,
                'is_leader' => NULL,
                'organization_id' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            28 => 
            array (
                'id' => 6,
                'user_id' => 8,
                'team_user_id' => 4,
                'is_leader' => NULL,
                'organization_id' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            29 => 
            array (
                'id' => 5,
                'user_id' => 7,
                'team_user_id' => 4,
                'is_leader' => NULL,
                'organization_id' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            30 => 
            array (
                'id' => 4,
                'user_id' => 6,
                'team_user_id' => 4,
                'is_leader' => NULL,
                'organization_id' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            31 => 
            array (
                'id' => 3,
                'user_id' => 5,
                'team_user_id' => 4,
                'is_leader' => true,
                'organization_id' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            32 => 
            array (
                'id' => 2,
                'user_id' => 3,
                'team_user_id' => 4,
                'is_leader' => NULL,
                'organization_id' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            33 => 
            array (
                'id' => 1,
                'user_id' => 2,
                'team_user_id' => 4,
                'is_leader' => NULL,
                'organization_id' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
        ));
        
    	
    }
}
