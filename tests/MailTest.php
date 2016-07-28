<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class MailTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testMail()
    {
        Mail::send('emails.welcome', ["title"=>"sdfasdf", "body"=>"dfasdfasd"], function($message)
    	    {
    		$message->to('vladimir.khonin@megafon.ru', 'Джон Смит')->subject('Привет!');
            });
    }
}
