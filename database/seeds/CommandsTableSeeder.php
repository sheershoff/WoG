<?php

use Illuminate\Database\Seeder;

class CommandsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::connection('pgsql')->table('commands')->delete();
        
        \DB::connection('pgsql')->table('commands')->insert(array (
            0 => 
            array (
                'id' => 4,
                'code' => 'Inventary',
                'name' => 'Добавляется к товару в багаже',
                'description' => 'действие видно на товаре в багаже который в результате его будет уменьшен на 1',
                'organization_id' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 3,
                'code' => 'AutoClosed',
                'name' => 'Автозакрытие квеста',
                'description' => 'Базовый робот закроет этот квест при выполнении этого действия',
                'organization_id' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 2,
                'code' => 'Open',
                'name' => 'открытие',
                'description' => 'Базовый робот сам выполнит это действие при взятии квеста.',
                'organization_id' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 1,
                'code' => 'Init',
                'name' => 'инициация',
                'description' => 'Базовый робот сам выполнит это действие при создании записи о квесте',
                'organization_id' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
        ));
        
    	
    }
}
