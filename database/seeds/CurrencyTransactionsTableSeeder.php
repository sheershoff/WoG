<?php

use Illuminate\Database\Seeder;

class CurrencyTransactionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::connection('pgsql')->table('currency_transactions')->delete();
        
        
    	
    }
}
