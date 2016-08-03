<?php

use Illuminate\Database\Seeder;

class UserSkillTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('user_skills')->delete();
        
        \DB::table('user_skills')->insert(array (
        ));
        
        
    }
}
