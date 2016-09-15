<?php

namespace App\Console\Commands;

use App\Models\User;
use App\Http\Controllers\WogController;

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
    protected $req = [
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
    protected $quest_id = 3;
    protected $action_id = 3;

    public function getUser($key, $email = null)
    {
        $u = User::where('jira', '=', $key)->first();
        if (count($u) == 1) {
            return $u;
        }
        if (isset($email)) {
            $u = new User();
            $u->jira = $key;
            $u->email = $email;
            $u->save;
            return $u;
        }
        return NULL;
    }

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
        $this->req["jql"] = $this->jira->jql["VladyJiraClosedBug"];
        $issues = $this->jira->getIssues($this->req);
        //$users = User::/* where('jira', '=', '') -> */whereNull('jira')->whereNotNull('email')->get();
        $bar = $this->output->createProgressBar(count($issues));
        foreach ($issues as $issue) {
            $bar->advance();
            $userId = $this->getUser($issue['fields']['assignee']['key'], $issue['fields']['assignee']['emailAddress']);
            if (!isset($userId)) {
                $this->line($issue['fields']['assignee']['key'] . ' not fond!');
            }
            WogController::newActionTransaction($userId, $this->action_id, $this->quest_id, $issue['key']);
            $this->line($userId->email . ' ' . $issue['key']);
        }
    }

}
