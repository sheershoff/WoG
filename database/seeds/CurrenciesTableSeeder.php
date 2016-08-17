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
            1 => 
            array (
                'id' => 3,
                'name' => 'Карма',
                'description' => 'Опыт взаимоотношений',
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
            2 => 
            array (
                'id' => 4,
                'name' => 'Gold',
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
            3 => 
            array (
                'id' => 1,
                'name' => 'invite',
                'description' => 'Приглашение в игру',
                'function' => NULL,
                'options' => NULL,
                'photo' => NULL,
                'top_menu' => false,
                'role_id' => 2,
                'currency_type_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            4 => 
            array (
                'id' => 2,
                'name' => 'XP',
                'description' => 'Опыт',
                'function' => NULL,
                'options' => NULL,
                'photo' => NULL,
                'top_menu' => true,
                'role_id' => 1,
                'currency_type_id' => 10,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            5 => 
            array (
                'id' => 8,
                'name' => '1й CLM',
                'description' => '1й CLM создан',
                'function' => NULL,
                'options' => NULL,
                'photo' => NULL,
                'top_menu' => false,
                'role_id' => 1,
                'currency_type_id' => 9,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            6 => 
            array (
                'id' => 9,
                'name' => '100 CLM ',
                'description' => 'Создано 100 CLM. Ты набираешь обороты!',
                'function' => NULL,
                'options' => NULL,
                'photo' => NULL,
                'top_menu' => false,
                'role_id' => 1,
                'currency_type_id' => 9,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            7 => 
            array (
                'id' => 10,
                'name' => '1000 CLM',
                'description' => 'Не бывалый рекорд!',
                'function' => NULL,
                'options' => NULL,
                'photo' => NULL,
                'top_menu' => false,
                'role_id' => 1,
                'currency_type_id' => 9,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            8 => 
            array (
                'id' => 5,
                'name' => 'HP',
                'description' => 'Уровень жизни. Следи за ним - как только он будет равен нулю - твои действия в игре будут заблокированы.',
                'function' => NULL,
                'options' => NULL,
                'photo' => NULL,
                'top_menu' => false,
                'role_id' => 2,
                'currency_type_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            9 => 
            array (
                'id' => 7,
                'name' => 'Live',
                'description' => 'Жизни',
                'function' => NULL,
                'options' => NULL,
                'photo' => NULL,
                'top_menu' => false,
                'role_id' => 3,
                'currency_type_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            10 => 
            array (
                'id' => 11,
                'name' => 'Хакатон 2016',
                'description' => 'Награждается за участие',
                'function' => NULL,
                'options' => NULL,
                'photo' => NULL,
                'top_menu' => false,
                'role_id' => 1,
                'currency_type_id' => 9,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            11 => 
            array (
                'id' => 12,
                'name' => 'ЕБ 2015-12-15',
                'description' => 'Награждается за участие в старте ЕБ',
                'function' => NULL,
                'options' => NULL,
                'photo' => NULL,
                'top_menu' => false,
                'role_id' => 1,
                'currency_type_id' => 9,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}
