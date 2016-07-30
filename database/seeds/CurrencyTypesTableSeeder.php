<?php

use Illuminate\Database\Seeder;

class CurrencyTypesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('CurrencyTypes')->delete();
        
        \DB::table('CurrencyTypes')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Карма',
                'unit' => 'СеперМегаСпасибо',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Голда',
                'unit' => 'Тугрики',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Навык',
                'unit' => 'Звезда',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}
