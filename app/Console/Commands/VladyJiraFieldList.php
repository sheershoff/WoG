<?php

namespace App\Console\Commands;

class VladyJiraFieldList extends VladyJiraCommand
{

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'jira:fields';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Список полей';
    protected $req = ["jql" => 'project = GFimpl ORDER BY key desc'];

    /**
     * Execute the console command.
     *
     * @return mixed
     *
     * Ищем пользователей в jira
     * GET /rest/api/2/user/search
     * https://docs.atlassian.com/jira/REST/cloud/#api/2/user-findUsersWithBrowsePermission
     *
     */
    public function handle()
    {
        dd($this->jira->getJiraField($this->req));
    }

}
