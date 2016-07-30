<?php

use Illuminate\Database\Seeder;

class CurrencyTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('Currency')->delete();
        
        \DB::table('Currency')->insert(array (
            0 => 
            array (
                'id' => 3,
                'name' => 'Карма',
                'description' => 'Опыт',
                'function' => NULL,
                'options' => NULL,
                'photo' => NULL,
                'topMenu' => false,
                'roleId' => 1,
                'currencyTypesId' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 4,
                'name' => 'Голда',
                'description' => 'Золото',
                'function' => NULL,
                'options' => NULL,
                'photo' => NULL,
                'topMenu' => false,
                'roleId' => 1,
                'currencyTypesId' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 6,
                'name' => 'Сноровка',
                'description' => NULL,
                'function' => NULL,
                'options' => NULL,
                'photo' => NULL,
                'topMenu' => false,
                'roleId' => 1,
                'currencyTypesId' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}
