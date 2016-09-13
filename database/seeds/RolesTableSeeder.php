<?php

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::connection('pgsql')->table('roles')->delete();
        
        \DB::connection('pgsql')->table('roles')->insert(array (
            0 => 
            array (
                'id' => 12,
                'code' => 'titul',
                'name' => 'titul',
                'description' => NULL,
                'organization_id' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 9,
                'code' => 'Skill',
                'name' => 'Skill',
                'description' => NULL,
                'organization_id' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 8,
                'code' => 'karma',
                'name' => 'karma',
                'description' => NULL,
                'organization_id' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 7,
                'code' => 'mana',
                'name' => 'mana',
                'description' => NULL,
                'organization_id' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            4 => 
            array (
                'id' => 6,
                'code' => 'TeamRaid',
                'name' => 'TeamRaid',
                'description' => NULL,
                'organization_id' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            5 => 
            array (
                'id' => 5,
                'code' => 'lvl5',
                'name' => 'lvl5',
                'description' => NULL,
                'organization_id' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            6 => 
            array (
                'id' => 4,
                'code' => 'lvl4',
                'name' => 'lvl4',
                'description' => NULL,
                'organization_id' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            7 => 
            array (
                'id' => 3,
                'code' => 'lvl3',
                'name' => 'lvl3',
                'description' => NULL,
                'organization_id' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            8 => 
            array (
                'id' => 2,
                'code' => 'lvl2',
                'name' => 'lvl2',
                'description' => NULL,
                'organization_id' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            9 => 
            array (
                'id' => 1,
                'code' => 'lvl1',
                'name' => 'lvl1',
                'description' => NULL,
                'organization_id' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            10 => 
            array (
                'id' => -1,
                'code' => 'Admin',
                'name' => 'Admin',
                'description' => NULL,
                'organization_id' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            11 => 
            array (
                'id' => -2,
                'code' => 'Guest',
                'name' => 'Guest',
                'description' => NULL,
                'organization_id' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            12 => 
            array (
                'id' => -3,
                'code' => 'AdminBalance',
                'name' => 'AdminBalance',
                'description' => 'Даёт право балансировать вознаграждения',
                'organization_id' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            13 => 
            array (
                'id' => -4,
                'code' => 'Admin0',
                'name' => 'Admin0',
                'description' => 'Даёт право править настройки с организацией = 0',
                'organization_id' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
        ));
        
    	
    }
}
