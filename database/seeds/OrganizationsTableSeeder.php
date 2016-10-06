<?php

use Illuminate\Database\Seeder;

class OrganizationsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::connection('pgsql')->table('organizations')->delete();
        
        \DB::connection('pgsql')->table('organizations')->insert(array (
            0 => 
            array (
                'id' => 5,
                'code' => 'MegaFon                       ',
                'name' => 'MegaFon',
                'description' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 4,
                'code' => 'chaild',
                'name' => 'Ребёнку',
                'description' => 'Вознаграждения ребёнку за учёбу и т.п.',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'code' => 'Test2                         ',
                'name' => 'Test2',
                'description' => 'Для тестирования но другой группы',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 2,
                'code' => 'Test1                         ',
                'name' => 'Test1',
                'description' => 'Для тестирования',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            4 => 
            array (
                'id' => 1,
                'code' => 'Demo                          ',
                'name' => 'Demo',
                'description' => 'Для показа',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            5 => 
            array (
                'id' => 0,
                'code' => 'Def                           ',
                'name' => 'Def',
                'description' => 'Значения по умолчанию',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
        ));
        
    	
    }
}
