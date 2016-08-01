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
        

        \DB::table('Quest')->delete();
        
        \DB::table('Quest')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Расскажи о себе миру',
                'description' => 'необходимо ответственно и вдумчиво заполнить о себе 5 профессиональных навыков',
                'roleId' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Заполни профиль',
                'description' => 'Дорогой друг, заполни профиль своего персонажа. Награда ждет тебя.',
                'roleId' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}
