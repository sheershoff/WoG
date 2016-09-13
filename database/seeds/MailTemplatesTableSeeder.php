<?php

use Illuminate\Database\Seeder;

class MailTemplatesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::connection('pgsql')->table('mail_templates')->delete();
        
        \DB::connection('pgsql')->table('mail_templates')->insert(array (
            0 => 
            array (
                'id' => 7,
                'code' => NULL,
                'name' => 'активация3',
                'description' => NULL,
                'body' => 'Инвайт активирован!',
                'size' => 1,
                'action_id' => 13,
                'organization_id' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 6,
                'code' => NULL,
                'name' => 'активация2',
                'description' => NULL,
                'body' => 'Входи дорогой друг!',
                'size' => 1,
                'action_id' => 13,
                'organization_id' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 4,
                'code' => NULL,
                'name' => 'активация1',
                'description' => NULL,
                'body' => 'Ура! Вход свободен. приключения ждут тебя!',
                'size' => 1,
                'action_id' => 13,
                'organization_id' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 2,
                'code' => NULL,
                'name' => 'Выполнение квеста игроком',
                'description' => NULL,
                'body' => 'Дорогой игрок! Квест "Заполни профиль" успешно выполнен. Вы - большой молодец!

Ваша награда: карма повышена на 5 супермегаспасибо, а голда - на 10 тугриков  ',
                'size' => 1,
                'action_id' => 4,
                'organization_id' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            4 => 
            array (
                'id' => 1,
                'code' => NULL,
                'name' => 'Взятие квеста игроком',
                'description' => NULL,
                'body' => 'Дорогой игрок! Вы участвуете в квесте "Заполни профиль"

Описание квеста: необходимо ответственно и вдумчиво заполнить профиль своего персонажа

Награда за выполнение не заставить себя ждать.',
                'size' => 1,
                'action_id' => 3,
                'organization_id' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
        ));
        
    	
    }
}
