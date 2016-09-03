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
        

        \DB::connection('pgsql')->table('currencies')->delete();
        
        \DB::connection('pgsql')->table('currencies')->insert(array (
            0 => 
            array (
                'id' => 779,
                'code' => NULL,
                'name' => 'Карма очки',
                'description' => 'Очки для распределения. Скидываются в стартовое положение ежемесячно.',
                'function' => NULL,
                'options' => NULL,
                'top_menu' => false,
                'role_id' => 8,
                'currency_type_id' => 1,
                
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 778,
                'code' => NULL,
                'name' => 'RaidTeamBonus',
                'description' => 'Командные бонусы за выполненый рейд',
                'function' => NULL,
                'options' => NULL,
                'top_menu' => false,
                'role_id' => 4,
                'currency_type_id' => 2,
                
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 777,
                'code' => NULL,
                'name' => 'Эксперт',
                'description' => 'Вас признали как эксперта. Вопрос, в чём?',
                'function' => NULL,
                'options' => NULL,
                'top_menu' => false,
                'role_id' => 12,
                'currency_type_id' => 5,
                
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 776,
                'code' => NULL,
                'name' => 'Командир',
                'description' => NULL,
                'function' => NULL,
                'options' => NULL,
                'top_menu' => false,
                'role_id' => 12,
                'currency_type_id' => 5,
                
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            4 => 
            array (
                'id' => 775,
                'code' => NULL,
                'name' => 'Рядовой',
                'description' => NULL,
                'function' => NULL,
                'options' => NULL,
                'top_menu' => false,
                'role_id' => 12,
                'currency_type_id' => 5,
                
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            5 => 
            array (
                'id' => 774,
                'code' => NULL,
                'name' => 'Дух',
                'description' => 'Вы получили всой первый титул!
Поздравляем!',
                'function' => NULL,
                'options' => NULL,
                'top_menu' => false,
                'role_id' => 12,
                'currency_type_id' => 5,
                
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            6 => 
            array (
                'id' => 17,
                'code' => NULL,
                'name' => 'Baddy',
                'description' => 'Рейтинг прокачки друзей',
                'function' => NULL,
                'options' => NULL,
                'top_menu' => false,
                'role_id' => 2,
                'currency_type_id' => 10,
                
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            7 => 
            array (
                'id' => 16,
                'code' => NULL,
                'name' => 'Большая красная бутылка',
                'description' => NULL,
                'function' => NULL,
                'options' => NULL,
                'top_menu' => false,
                'role_id' => 3,
                'currency_type_id' => 4,
                
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            8 => 
            array (
                'id' => 15,
                'code' => NULL,
                'name' => 'Средняя красная бутылка',
                'description' => NULL,
                'function' => NULL,
                'options' => NULL,
                'top_menu' => false,
                'role_id' => 2,
                'currency_type_id' => 4,
                
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            9 => 
            array (
                'id' => 14,
                'code' => NULL,
                'name' => 'Маленькая красная бутылка',
                'description' => NULL,
                'function' => NULL,
                'options' => NULL,
                'top_menu' => false,
                'role_id' => 1,
                'currency_type_id' => 4,
                
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            10 => 
            array (
                'id' => 13,
                'code' => NULL,
                'name' => 'Mana',
                'description' => 'Магическая энергия этого мира',
                'function' => NULL,
                'options' => NULL,
                'top_menu' => true,
                'role_id' => 3,
                'currency_type_id' => 2,
                
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            11 => 
            array (
                'id' => 12,
                'code' => NULL,
                'name' => 'ЕБ 2015-12-15',
                'description' => 'Награждается за участие в старте ЕБ',
                'function' => NULL,
                'options' => NULL,
                'top_menu' => false,
                'role_id' => 1,
                'currency_type_id' => 9,
                
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            12 => 
            array (
                'id' => 11,
                'code' => NULL,
                'name' => 'Хакатон 2016',
                'description' => 'Награждается за участие',
                'function' => NULL,
                'options' => NULL,
                'top_menu' => false,
                'role_id' => 1,
                'currency_type_id' => 9,
                
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            13 => 
            array (
                'id' => 10,
                'code' => NULL,
                'name' => '1000 CLM',
                'description' => 'Не бывалый рекорд!',
                'function' => NULL,
                'options' => NULL,
                'top_menu' => false,
                'role_id' => 1,
                'currency_type_id' => 6,
                
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            14 => 
            array (
                'id' => 9,
                'code' => NULL,
                'name' => '100 CLM ',
                'description' => 'Создано 100 CLM. Ты набираешь обороты!',
                'function' => NULL,
                'options' => NULL,
                'top_menu' => false,
                'role_id' => 1,
                'currency_type_id' => 6,
                
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            15 => 
            array (
                'id' => 8,
                'code' => NULL,
                'name' => '1й CLM',
                'description' => '1й CLM создан',
                'function' => NULL,
                'options' => NULL,
                'top_menu' => false,
                'role_id' => 1,
                'currency_type_id' => 6,
                
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            16 => 
            array (
                'id' => 7,
                'code' => NULL,
                'name' => 'Live',
                'description' => 'Жизни',
                'function' => NULL,
                'options' => NULL,
                'top_menu' => false,
                'role_id' => 3,
                'currency_type_id' => 2,
                
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            17 => 
            array (
                'id' => 5,
                'code' => NULL,
                'name' => 'HP',
                'description' => 'Уровень жизни. Следи за ним - как только он будет равен нулю - твои действия в игре будут заблокированы.',
                'function' => NULL,
                'options' => NULL,
                'top_menu' => false,
                'role_id' => 2,
                'currency_type_id' => 2,
                
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            18 => 
            array (
                'id' => 4,
                'code' => NULL,
                'name' => 'Gold',
                'description' => 'Золото',
                'function' => NULL,
                'options' => NULL,
                'top_menu' => false,
                'role_id' => 1,
                'currency_type_id' => 2,
                
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            19 => 
            array (
                'id' => 3,
                'code' => NULL,
                'name' => 'Карма',
                'description' => 'Опыт взаимоотношений',
                'function' => NULL,
                'options' => NULL,
                'top_menu' => false,
                'role_id' => 1,
                'currency_type_id' => 1,
                
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            20 => 
            array (
                'id' => 2,
                'code' => NULL,
                'name' => 'XP',
                'description' => 'Опыт',
                'function' => NULL,
                'options' => NULL,
                'top_menu' => true,
                'role_id' => 1,
                'currency_type_id' => 10,
                
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            21 => 
            array (
                'id' => 1,
                'code' => NULL,
                'name' => 'invite',
                'description' => 'Приглашение в игру',
                'function' => NULL,
                'options' => NULL,
                'top_menu' => false,
                'role_id' => 2,
                'currency_type_id' => 4,
                
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
        ));
        
    	
    }
}
