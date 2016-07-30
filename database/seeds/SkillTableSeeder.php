<?php

use Illuminate\Database\Seeder;

class SkillTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('Skill')->delete();
        
        \DB::table('Skill')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Спикер',
                'description' => 'Навык красиво говорить',
                'options' => NULL,
                'currencyId' => 6,
                'skillId' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 4,
                'name' => 'Слушатель',
                'description' => 'Навык внимательно слушать и не перебивать',
                'options' => NULL,
                'currencyId' => 6,
                'skillId' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 5,
                'name' => 'Powerpoint',
                'description' => 'Навык красиво рисовать презентации',
                'options' => NULL,
                'currencyId' => 6,
                'skillId' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 6,
                'name' => ' Бэкэнд',
                'description' => NULL,
                'options' => NULL,
                'currencyId' => 6,
                'skillId' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            4 => 
            array (
                'id' => 8,
                'name' => 'Фронтэнд',
                'description' => NULL,
                'options' => NULL,
                'currencyId' => 6,
                'skillId' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}
