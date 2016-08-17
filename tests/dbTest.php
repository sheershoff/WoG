<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class dbTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->seeInDatabase('users', ['email' => 'Vladimir.Khonin@Megafon.ru']);
    }
    
    public function killMe()
    {
        $this->assertTrue(DB::table('users')->where('email', '=', 'Vladimir.Khonin@Megafon.ru')->delete());
        $this->assertTrue(DB::raw('delete from wog_users where email=\'Vladimir.Khonin@Megafon.ru\' cascade'));
        
        $this->seeInDatabase('users', ['email' => 'Vladimir.Khonin@Megafon.ru']);
    }

public function testSeq() {
    if(DB::connection()->getName() == 'pgsql')
    {
        DB::setFetchMode(PDO::FETCH_CLASS);
        $tablesToCheck = \DB::select("select substring(table_name,5) n from information_schema.columns where table_name!='wog_migrations' and table_schema='wog' and column_name='id'");
        foreach($tablesToCheck as $tableToCheckN) {
            $tableToCheck=$tableToCheckN->n;
    	$x=DB::table($tableToCheck)->select(DB::raw('\''.$tableToCheck.'\' n, max(id) max, nextval(\'wog_'.$tableToCheck.'_id_seq\') nextval'))->first();
    	if (!isset($x->max)) $x->max=1;
	if (!isset($x->nextval)) $x->nextval=1;
            if($x->max > $x->nextval)
            {
                DB::select('SELECT setval(\'wog_'.$tableToCheck.'_id_seq\', '.$x->max.')');
		$x=DB::table($tableToCheck)->select(DB::raw('MAX(id) max, nextval(\'wog_'.$tableToCheck.'_id_seq\') nextval'))->first();
                $this->assertTrue($x->nextval > $x->max);
            }
        }
    }
}
}
