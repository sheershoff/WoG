<?php

namespace App\Console\Commands;

/* список полей проекта или вообще всех */

class VladyJiraFieldList extends VladyJiraCommand
{

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'jira:fields {project?}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Список полей проекта или все';

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
        dd($this->jira->getJiraField($this->argument('project')));
    }

}
