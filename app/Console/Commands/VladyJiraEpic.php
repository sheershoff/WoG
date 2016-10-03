<?php

namespace App\Console\Commands;

use App\Models\User;

class VladyJiraEpic extends VladyJiraCommand
{

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'jira:epic'
            . ' {action : cc - список тех, на кого задача назначена не корректно|list - Список эпиков с ответственными и командой}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Список эпиков с ответственными и командой.';

    /*
     *  запрос для получения списка закрытых багов
     */
    protected $req = [
//        "maxResults" => 2,
        "fields" => [
            "key",
            "assignee",
            "customfield_10001", //cc
            "issuelinks",
            "summary"
        ],
    ];
    protected $reqList = [
//        "maxResults" => 2,
        "fields" => [
            "key",
            "assignee",
            "customfield_10001", //cc
            "summary"
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
        if ($this->argument('action') == 'list') {
            $req = $this->reqList;
        } else if ($this->argument('action') == 'cc') {
            $req = $this->req;
        } else {
            $this->line('list|cc|run');
        }
        $req["jql"] = $this->jira->jql["VladyJiraEpic"];
        $issues = $this->jira->getIssues($req);
        if ($this->argument('action') == 'list') {
            dd($issues);
        } else if ($this->argument('action') == 'cc') {
            $data = array_map(
                    function ($issue) {
                $x = isset($issue["fields"]["issuelinks"]);
                if ($x) {
                    $x = 0;
                    foreach ($issue["fields"]["issuelinks"] as $i) {
                        if (array_key_exists("inwardIssue", $i)) {
                            $x = $x || (substr($i["inwardIssue"]["key"], 0, 6) == "GFIMPL");
                        } else {
                            $x = $x || (substr($i["outwardIssue"]["key"], 0, 6) == "GFIMPL");
                        }
                        //substr($i["inwardIssue"]["key"],0,6)."=GFIMPL=".$x."\n";
                    }
                }
                return
                        $issue["key"] . ' ' .
                        $issue["fields"]["summary"] . " " .
                        $issue["fields"]["assignee"]["emailAddress"] . ' (' .
                        (isset($issue["fields"]["customfield_10001"]) ? 'cc' : 'no') . '/' .
                        ($x ? 'link' : 'no') . ")";
            }, $issues);
            dd($data);
        }
    }

}
