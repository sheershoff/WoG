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
                'id' => 10,
                'code' => NULL,
                'name' => 'Рейтинг',
                'description' => NULL,
                'unit' => 'XP',
                'organization_id' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 9,
                'code' => NULL,
                'name' => 'Медаль',
                'description' => NULL,
                'unit' => 'Шт',
                'organization_id' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 6,
                'code' => NULL,
                'name' => 'Достижения',
                'description' => NULL,
                'unit' => '',
                'organization_id' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 5,
                'code' => NULL,
                'name' => 'Титул',
                'description' => NULL,
                'unit' => 'восхищений',
                'organization_id' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            4 => 
            array (
                'id' => 4,
                'code' => NULL,
                'name' => 'Шмот',
                'description' => NULL,
                'unit' => 'шт',
                'organization_id' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            5 => 
            array (
                'id' => 3,
                'code' => NULL,
                'name' => 'Сноровка',
                'description' => NULL,
                'unit' => 'Звезд',
                'organization_id' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            6 => 
            array (
                'id' => 2,
                'code' => NULL,
                'name' => 'Голда',
                'description' => NULL,
                'unit' => 'Тугриков',
                'organization_id' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            7 => 
            array (
                'id' => 1,
                'code' => NULL,
                'name' => 'Карма',
                'description' => NULL,
                'unit' => 'СуперСпасибо',
                'organization_id' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
        ));
        
    	
    }
}
