<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use NotificationChannels\Telegram\TelegramChannel;
use NotificationChannels\Telegram\TelegramMessage;
use Illuminate\Notifications\Notification;
use use App\Notifications\FastAlert;

class telegramTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
Notification::send(User::find(2), new FastAlert(1));
echo 111;
//	var_dump(TelegramMessage::create()
//            ->to($this->user->telegram_user_id) // Optional.
//            ->content("*HELLO!* \n One of your invoices has been paid!")); // Markdown supported.
//            ->button('View Invoice', $url)); // Inline Button
    
        $this->assertTrue(false);
    }
}
