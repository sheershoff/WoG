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
                'id' => 3,
                'code' => NULL,
                'name' => 'Завершён',
                'organization_id' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'code' => NULL,
                'name' => 'Выбран',
                'organization_id' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 1,
                'code' => NULL,
                'name' => 'Доступен для выбора',
                'organization_id' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
        ));
        
    	
    }
}
