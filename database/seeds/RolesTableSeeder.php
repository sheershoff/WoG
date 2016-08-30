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
                'code' => NULL,
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
                'code' => NULL,
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
                'code' => NULL,
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
                'code' => NULL,
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
                'code' => NULL,
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
                'code' => NULL,
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
                'code' => NULL,
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
                'code' => NULL,
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
                'code' => NULL,
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
                'code' => NULL,
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
                'code' => NULL,
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
                'code' => NULL,
                'name' => 'Guest',
                'description' => NULL,
                'organization_id' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
        ));
        
    	
    }
}
