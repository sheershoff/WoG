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
        
        
    	
    }
}
