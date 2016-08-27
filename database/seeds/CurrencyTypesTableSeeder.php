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
        

        \DB::connection('pgsql')->table('currency_types')->delete();
        
        \DB::connection('pgsql')->table('currency_types')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Карма',
                'unit' => 'СуперМегаСпасибо',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Голда',
                'unit' => 'Тугриков',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 10,
                'name' => 'Рейтинг',
                'unit' => 'XP',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 9,
                'name' => 'Медаль',
                'unit' => 'Шт',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            4 => 
            array (
                'id' => 4,
                'name' => 'Шмот',
                'unit' => 'шт',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            5 => 
            array (
                'id' => 3,
                'name' => 'Сноровка',
                'unit' => 'Звезд',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}
