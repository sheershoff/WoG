<?php

namespace App\Console\Commands;

use App\Models\User;
use App\Models\ActionTransaction;

class VladyTest extends VladyJiraCommand
{

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'quest:vladytest';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'просто тест';

    /*
     *  запрос для получения списка закрытых багов
     */
    protected $req = [
//        "maxResults" => 5,
        //"update" => ["description" => ["set" => "test1"], "comments" => ["add" => ["body" => "test2"]]]
        "fields" => ["description" => "sdsds"]
//        "body" => "test2"
    ];

//    protected function getUserByEmail($user)
//    {
//        if (isset($e) && ($e !== FALSE) && ($e != '')) {
//            $user->jira = $e;
//            $user->save();
//            return $e;
//        }
//    }
//    protected $quest_id = 13;
//    protected $lite_action_id = 16;
//    protected $full_action_id = 17;
//
//    public function getUser($key, $email = null)
//    {
//        $u = User::where('jira', '=', $key)->first();
//        if (count($u) == 1) {
//            return $u->id;
//        }
//        if (isset($email)) {
//            $u = new User();
//            $u->jira = $key;
//            $u->email = $email;
//            $u->save;
//            dd($u);
//            return $u->id;
//        }
//        return FALSE;
//    }

    public function handle()
    {
        dd($this->jira->getJira('issue/GFIMPL-11762', $this->req, 'PUT'));
    }

}
