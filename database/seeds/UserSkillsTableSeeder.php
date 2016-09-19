<?php

use Illuminate\Database\Seeder;

class UserSkillsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::connection('pgsql')->table('user_skills')->delete();
        
        
        \DB::connection('pgsql')->table('user_skills')->insert(array (
            0 =>
                array (
                    'user_id' => 80,
                    'skill_id' => 773,
                    'expert_user_id' => 80,
                    'value' => 5,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                    'deleted_at' => NULL,
                )
            )
                );

    	
    }
}
