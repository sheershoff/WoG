<?php

use Illuminate\Database\Seeder;

class ActionTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('Action')->delete();
        
        \DB::table('Action')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Взятие квеста игроком',
                'description' => '',
                'questId' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Выполнение квеста игроком',
                'description' => '',
                'questId' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Взятие квеста Заполни профиль',
                'description' => NULL,
                'questId' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Завершение квеста Заполни профиль',
                'description' => NULL,
                'questId' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}
