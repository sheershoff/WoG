<?php

use Illuminate\Database\Seeder;

class MailAggsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::connection('pgsql')->table('mail_aggs')->delete();
        
        
    	
    }
}
