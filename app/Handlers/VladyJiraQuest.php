<?php

/**
 * Description of VladyJiraQuest
 *
 * @author xvv
 */
class VladyJiraQuest {
    
    protected $host='';
    protected $login='';
    protected $password='';
    
    public function __construct() {
        $this->host=config('wogJiraVlady.host');
        $this->login=config('wogJiraVlady.login');
        $this->password=config('wogJiraVlady.password');
        if (($this->host=='') || ($this->login=='') || ($this->password=='')) {
             throw new Exception('Не заданы реквизиты jira');
        }
    }
    
    //GET /rest/api/2/user/search
    //https://docs.atlassian.com/jira/REST/cloud/#api/2/user-findUsersWithBrowsePermission
    public function questFindLogin() {
        
    }
    
    //Договорённости о коммуникациях - почта и встречи
    //https://habrahabr.ru/post/309130/
    
    //о вреде привет
    //https://habrahabr.ru/post/298928/
}
