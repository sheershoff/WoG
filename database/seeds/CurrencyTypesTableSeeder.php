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
                'id' => 13,
                'code' => 'body',
                'name' => 'слоты для инвентаря',
            'description' => 'слоты для носимого инвентаря (тела игрока)',
                'unit' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 12,
                'code' => 'max',
                'name' => 'максимальное значение',
                'description' => 'максимальное значение, которое может приобретать навык',
                'unit' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 10,
                'code' => 'xp',
                'name' => 'Рейтинг',
                'description' => NULL,
                'unit' => 'XP',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 9,
                'code' => 'medal',
                'name' => 'Медаль',
                'description' => NULL,
                'unit' => 'Шт',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            4 => 
            array (
                'id' => 6,
                'code' => 'achivment',
                'name' => 'Достижения',
                'description' => NULL,
                'unit' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            5 => 
            array (
                'id' => 5,
                'code' => 'titul',
                'name' => 'Титул',
                'description' => NULL,
                'unit' => 'восхищений',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            6 => 
            array (
                'id' => 4,
                'code' => 'armor',
                'name' => 'Шмот',
                'description' => NULL,
                'unit' => 'шт',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            7 => 
            array (
                'id' => 3,
                'code' => 'skill',
                'name' => 'Сноровка',
                'description' => NULL,
                'unit' => 'Звезд',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            8 => 
            array (
                'id' => 2,
                'code' => 'gold',
                'name' => 'Платёжные балансы',
                'description' => 'Платёжные балансы, такие как gold, mana и т.п.',
                'unit' => 'Тугриков',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
        ));
        
    	
    }
}
