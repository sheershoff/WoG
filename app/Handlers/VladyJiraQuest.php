<?php

/**
 * Description of VladyJiraQuest
 *
 * @author xvv
 */
class VladyJiraQuest extends Jira
{

    protected $jira = NULL;

    public function __construct()
    {
        $apiurl = config('wogJiraVlady.apiurl');
        $username = config('wogJiraVlady.username');
        $password = config('wogJiraVlady.password');
        $jira = new Jira($apiurl, $username, $password);
    }

    //GET /rest/api/2/user/search
    //https://docs.atlassian.com/jira/REST/cloud/#api/2/user-findUsersWithBrowsePermission
    public function questFindLogin()
    {

    }

    //Договорённости о коммуникациях - почта и встречи
    //https://habrahabr.ru/post/309130/
    //о вреде привет
    //https://habrahabr.ru/post/298928/
}
