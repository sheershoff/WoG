<?php

namespace App\Console\Commands;

use App\Models\User;

class VladyJiraClosedBug extends VladyJiraCommand
{

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'quest:vladyjiraclosedbag';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'бонус за закрытые баги';

    /*
     *  запрос для получения списка закрытых багов
     */
    //project = GFPMO AND resolution = Unresolved AND issuetype = Story and "Epic Link"=GFPMO-512 ORDER BY priority DESC
    protected $req = [//"jql"=>"project=GFIMPL AND type=Bug AND status!=closed order by created desc",
        "jql" => 'project = GFimpl AND issuetype = bug and status=Closed and updated<-1h and updated>-1w and updated>=\'2016-09-11\' ORDER BY key desc',
        "maxResults" => 2,
        "fields" => [
            "key",
            "assignee",
            "priority",
            "issuetype",
            "issuelinks",
            "status",
            "summary", "description",
            "duedate", "progress",
            "customfield_10201", //epic
            "customfield_14801", //Approved date
        ],
    ];

//    protected function getUserByEmail($user)
//    {
//        if (isset($e) && ($e !== FALSE) && ($e != '')) {
//            $user->jira = $e;
//            $user->save();
//            return $e;
//        }
//    }

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
        $issues = $this->jira->getIssues($this->req);
        //$users = User::/* where('jira', '=', '') -> */whereNull('jira')->whereNotNull('email')->get();
        dd($issues);
        $bar = $this->output->createProgressBar(count($issues));
        foreach ($issues as $issue) {
            $bar->advance();
            $this->line($user->email);
            $this->getUserByEmail($user);
        }
    }

}
