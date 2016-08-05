<?php

use Illuminate\Database\Seeder;

class CurrenciesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('currencies')->delete();
        
        \DB::table('currencies')->insert(array (
            0 => 
            array (
                'id' => 3,
                'name' => 'Карма',
                'description' => 'Опыт',
                'function' => NULL,
                'options' => NULL,
                'photo' => NULL,
                'top_menu' => false,
                'role_id' => 1,
                'currency_type_id' => 1,
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
                'top_menu' => false,
                'role_id' => 1,
                'currency_type_id' => 2,
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
                'top_menu' => false,
                'role_id' => 1,
                'currency_type_id' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}
