<?php

use Illuminate\Database\Seeder;

class UserProfileTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('UserProfile')->delete();
        
        
        
    }
}
