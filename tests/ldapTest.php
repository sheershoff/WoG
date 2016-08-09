<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ldapTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
	$user = Adldap::search()->users()->find('vladimir khonin');
//        $this->assertFalse(Adldap::auth()->attempt('Vladimir.Khonin', 'jhjkahk'));
	$this->assertTrue(True);
    }
}
