<?php

use Illuminate\Database\Seeder;

class UserQuestStatusesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::connection('pgsql')->table('user_quest_statuses')->delete();
        
        \DB::connection('pgsql')->table('user_quest_statuses')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Доступен для выбора',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 3,
                'name' => 'Завершён',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 2,
                'name' => 'Выбран',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
        ));
        
    	
    }
}
