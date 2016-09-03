<?php

use Illuminate\Database\Seeder;

class RoleUserTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::connection('pgsql')->table('role_user')->delete();
        
        \DB::connection('pgsql')->table('role_user')->insert(array (
            0 => 
            array (
                'id' => 390,
                'role_id' => -2,
                'user_id' => 56,
                
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 389,
                'role_id' => -2,
                'user_id' => 9,
                
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 388,
                'role_id' => -2,
                'user_id' => 72,
                
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 387,
                'role_id' => -2,
                'user_id' => 71,
                
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            4 => 
            array (
                'id' => 386,
                'role_id' => -2,
                'user_id' => 16,
                
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            5 => 
            array (
                'id' => 384,
                'role_id' => -2,
                'user_id' => 53,
                
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            6 => 
            array (
                'id' => 383,
                'role_id' => -2,
                'user_id' => 7,
                
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            7 => 
            array (
                'id' => 382,
                'role_id' => -2,
                'user_id' => 2,
                
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            8 => 
            array (
                'id' => 379,
                'role_id' => 2,
                'user_id' => 65,
                
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            9 => 
            array (
                'id' => 378,
                'role_id' => 2,
                'user_id' => 64,
                
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            10 => 
            array (
                'id' => 377,
                'role_id' => 2,
                'user_id' => 63,
                
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            11 => 
            array (
                'id' => 375,
                'role_id' => 2,
                'user_id' => 61,
                
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            12 => 
            array (
                'id' => 373,
                'role_id' => 2,
                'user_id' => 59,
                
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            13 => 
            array (
                'id' => 372,
                'role_id' => 2,
                'user_id' => 57,
                
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            14 => 
            array (
                'id' => 370,
                'role_id' => 2,
                'user_id' => 55,
                
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            15 => 
            array (
                'id' => 369,
                'role_id' => 2,
                'user_id' => 54,
                
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            16 => 
            array (
                'id' => 367,
                'role_id' => 2,
                'user_id' => 52,
                
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            17 => 
            array (
                'id' => 366,
                'role_id' => 2,
                'user_id' => 50,
                
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            18 => 
            array (
                'id' => 365,
                'role_id' => 2,
                'user_id' => 49,
                
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            19 => 
            array (
                'id' => 364,
                'role_id' => 2,
                'user_id' => 48,
                
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            20 => 
            array (
                'id' => 363,
                'role_id' => 2,
                'user_id' => 47,
                
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            21 => 
            array (
                'id' => 362,
                'role_id' => 2,
                'user_id' => 45,
                
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            22 => 
            array (
                'id' => 361,
                'role_id' => 2,
                'user_id' => 43,
                
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            23 => 
            array (
                'id' => 360,
                'role_id' => 2,
                'user_id' => 42,
                
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            24 => 
            array (
                'id' => 359,
                'role_id' => 2,
                'user_id' => 40,
                
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            25 => 
            array (
                'id' => 358,
                'role_id' => 2,
                'user_id' => 39,
                
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            26 => 
            array (
                'id' => 357,
                'role_id' => 2,
                'user_id' => 38,
                
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            27 => 
            array (
                'id' => 355,
                'role_id' => 2,
                'user_id' => 36,
                
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            28 => 
            array (
                'id' => 354,
                'role_id' => 2,
                'user_id' => 35,
                
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            29 => 
            array (
                'id' => 353,
                'role_id' => 2,
                'user_id' => 34,
                
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            30 => 
            array (
                'id' => 352,
                'role_id' => 2,
                'user_id' => 33,
                
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            31 => 
            array (
                'id' => 351,
                'role_id' => 2,
                'user_id' => 32,
                
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            32 => 
            array (
                'id' => 350,
                'role_id' => 2,
                'user_id' => 30,
                
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            33 => 
            array (
                'id' => 349,
                'role_id' => 2,
                'user_id' => 28,
                
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            34 => 
            array (
                'id' => 348,
                'role_id' => 2,
                'user_id' => 27,
                
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            35 => 
            array (
                'id' => 347,
                'role_id' => 2,
                'user_id' => 26,
                
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            36 => 
            array (
                'id' => 346,
                'role_id' => 2,
                'user_id' => 25,
                
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            37 => 
            array (
                'id' => 345,
                'role_id' => 2,
                'user_id' => 24,
                
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            38 => 
            array (
                'id' => 344,
                'role_id' => 2,
                'user_id' => 23,
                
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            39 => 
            array (
                'id' => 343,
                'role_id' => 2,
                'user_id' => 22,
                
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            40 => 
            array (
                'id' => 342,
                'role_id' => 2,
                'user_id' => 21,
                
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            41 => 
            array (
                'id' => 341,
                'role_id' => 2,
                'user_id' => 20,
                
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            42 => 
            array (
                'id' => 340,
                'role_id' => 2,
                'user_id' => 19,
                
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            43 => 
            array (
                'id' => 339,
                'role_id' => 2,
                'user_id' => 18,
                
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            44 => 
            array (
                'id' => 338,
                'role_id' => 2,
                'user_id' => 17,
                
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            45 => 
            array (
                'id' => 336,
                'role_id' => 2,
                'user_id' => 10,
                
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            46 => 
            array (
                'id' => 12,
                'role_id' => -2,
                'user_id' => 15,
                
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            47 => 
            array (
                'id' => 11,
                'role_id' => -2,
                'user_id' => 14,
                
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            48 => 
            array (
                'id' => 10,
                'role_id' => -2,
                'user_id' => 37,
                
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            49 => 
            array (
                'id' => 9,
                'role_id' => -2,
                'user_id' => 13,
                
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            50 => 
            array (
                'id' => 8,
                'role_id' => -2,
                'user_id' => 12,
                
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            51 => 
            array (
                'id' => 7,
                'role_id' => 2,
                'user_id' => 8,
                
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            52 => 
            array (
                'id' => 6,
                'role_id' => 2,
                'user_id' => 6,
                
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            53 => 
            array (
                'id' => 5,
                'role_id' => 2,
                'user_id' => 4,
                
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            54 => 
            array (
                'id' => 4,
                'role_id' => 3,
                'user_id' => 5,
                
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            55 => 
            array (
                'id' => 3,
                'role_id' => -2,
                'user_id' => 60,
                
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            56 => 
            array (
                'id' => 2,
                'role_id' => 3,
                'user_id' => 3,
                
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            57 => 
            array (
                'id' => 1,
                'role_id' => -2,
                'user_id' => 62,
                
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
        ));
        
    	
    }
}
