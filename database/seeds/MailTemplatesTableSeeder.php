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
                'id' => 1,
                'name' => 'Взятие квеста игроком',
                'body' => 'Дорогой игрок! Вы участвуете в квесте "Заполни профиль"

Описание квеста: необходимо ответственно и вдумчиво заполнить профиль своего персонажа

Награда за выполнение не заставить себя ждать.',
                'size' => 1,
                'action_id' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Выполнение квеста игроком',
                'body' => 'Дорогой игрок! Квест "Заполни профиль" успешно выполнен. Вы - большой молодец!

Ваша награда: карма повышена на 5 супермегаспасибо, а голда - на 10 тугриков  ',
                'size' => 1,
                'action_id' => 4,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
        ));
        
    	
    }
}
