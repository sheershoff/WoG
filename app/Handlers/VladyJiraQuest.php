<?php

namespace App\Handlers;

/**
 * Description of VladyJiraQuest
 *
 * @author xvv
 */
class VladyJiraQuest extends Jira
{

    //protected $jira = NULL;

    public function __construct()
    {
        $apiurl = config('wogJiraVlady.apiurl');
        $username = config('wogJiraVlady.username');
        $password = config('wogJiraVlady.password');
        $proxy = config('wogJiraVlady.proxy');
        parent::__construct($apiurl, $username, $password, $proxy);
    }

    //Договорённости о коммуникациях - почта и встречи
    //https://habrahabr.ru/post/309130/
    //о вреде привет
    //https://habrahabr.ru/post/298928/
}
