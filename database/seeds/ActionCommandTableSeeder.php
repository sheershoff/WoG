<?php

use Illuminate\Database\Seeder;

class ActionCommandTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::connection('pgsql')->table('action_command')->delete();
        
        \DB::connection('pgsql')->table('action_command')->insert(array (
            0 => 
            array (
                'id' => 5,
                'action_id' => 13,
                'command_id' => 4,
                'organization_id' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 4,
                'action_id' => 13,
                'command_id' => 3,
                'organization_id' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'action_id' => 12,
                'command_id' => 2,
                'organization_id' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 2,
                'action_id' => 11,
                'command_id' => 1,
                'organization_id' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
        ));
        
    	
    }
}
