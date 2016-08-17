<?php

use Illuminate\Database\Seeder;

class ActionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('actions')->delete();
        
        \DB::table('actions')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Взятие квеста игроком',
                'description' => '',
                'quest_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Выполнение квеста игроком',
                'description' => '',
                'quest_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Взятие квеста Заполни профиль',
                'description' => NULL,
                'quest_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Завершение квеста Заполни профиль',
                'description' => NULL,
                'quest_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            4 => 
            array (
                'id' => 6,
                'name' => 'Маленькая крассная бутылка',
                'description' => 'Увеличивает HP',
                'quest_id' => 4,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            5 => 
            array (
                'id' => 7,
                'name' => 'Средняя красная бутылка',
                'description' => 'Увеличивает HP',
                'quest_id' => 4,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            6 => 
            array (
                'id' => 8,
                'name' => 'invite',
                'description' => 'Можно пригласить друга в игру. Открывает квест - прокачай друга.',
                'quest_id' => 4,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            7 => 
            array (
                'id' => 9,
                'name' => 'Использовать',
                'description' => 'маленькую красную',
                'quest_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}
