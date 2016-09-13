<?php

use Illuminate\Database\Seeder;

class QuestDependsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::connection('pgsql')->table('quest_depends')->delete();
        
        
    	
    }
}
