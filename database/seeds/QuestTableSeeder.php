<?php

use Illuminate\Database\Seeder;

class QuestTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('quests')->delete();
        
        \DB::table('quests')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Расскажи о себе миру',
                'description' => 'необходимо ответственно и вдумчиво заполнить о себе 5 профессиональных навыков',
                'role_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Заполни профиль',
                'description' => 'Дорогой друг, заполни профиль своего персонажа. Награда ждет тебя.',
                'role_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}
