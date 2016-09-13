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
        
        
    	
    }
}
