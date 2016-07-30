<?php

use Illuminate\Database\Seeder;

class MailTemplateTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('MailTemplate')->delete();
        
        \DB::table('MailTemplate')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Взятие квеста игроком',
                'body' => 'Дорогой игрок! Вы участвуете в квесте "Расскажи о себе миру"

Описание квеста: необходимо ответственно и вдумчиво заполнить о себе 5 профессиональных навыков

Награда за выполнение не заставить себя ждать: Ваша карма будет повышена на 5 супермегаспасибо, а голда - на 10 тугриков!',
                'size' => 1,
                'actionId' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Выполнение квеста игроком',
                'body' => 'Дорогой игрок! Квест "Расскажи о себе миру" успешно выполнен. Вы - большой молодец!

Ваша награда: карма повышена на 5 супермегаспасибо, а голда - на 10 тугриков  ',
                'size' => 1,
                'actionId' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}
