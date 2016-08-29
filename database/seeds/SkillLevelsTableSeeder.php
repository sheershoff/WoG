<?php

use Illuminate\Database\Seeder;

class SkillLevelsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::connection('pgsql')->table('skill_levels')->delete();
        
        
    	
    }
}
