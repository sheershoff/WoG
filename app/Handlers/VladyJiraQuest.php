<?php

namespace App\Handlers;

/**
 * Description of VladyJiraQuest
 *
 * @author xvv
 */
use App\Models\User;

class VladyJiraQuest extends Jira
{

    protected $jira = NULL;

    public function __construct()
    {
        $apiurl = config('wogJiraVlady.apiurl');
        $username = config('wogJiraVlady.username');
        $password = config('wogJiraVlady.password');
        $proxy = config('wogJiraVlady.proxy');
        $this->jira = new Jira($apiurl, $username, $password, $proxy);
    }

    /*
     * Ищем пользователей в jira
     * GET /rest/api/2/user/search
     * https://docs.atlassian.com/jira/REST/cloud/#api/2/user-findUsersWithBrowsePermission
     * @assert ()=1
     *
     */

    public function questFindLogin()
    {
        $x = User::/* where('jira', '=', '') -> */whereNull('jira')->whereNotNull('email')->get();
        foreach ($x as $u) {
            $e = $this->jira->getUserByEmail($u->email);
            if (isset($e) && !$e && ($e != '')) {
                $u->jira = $e;
                $u->save();
            }
        }
    }

    //Договорённости о коммуникациях - почта и встречи
    //https://habrahabr.ru/post/309130/
    //о вреде привет
    //https://habrahabr.ru/post/298928/
}
