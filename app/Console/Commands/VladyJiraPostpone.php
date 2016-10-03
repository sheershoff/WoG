<?php

namespace App\Console\Commands;

use App\Models\User;

class VladyJiraPostpone extends VladyJiraCommand
{

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'jira:postpone'
            . ' {action? : list - Список эпиков с ответственными и командой, typelink - табличка со статусами, onlytime - выводить только по времени}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Выводим из Postpone тех кто недолжен быть.';

    /*
     *  запрос для получения списка закрытых багов
     */
    protected $req = [
//        "maxResults" => 2,
        "fields" => [
//            "assignee",
            "issuelinks",
//            "summary"
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

    public function typeLinkShow()
    {
        $headers = ["id", "name", "inward", "outward"];
        $issueLinkTypes = $this->jira->issueLinkType();
        $issueLinkTypesFlat = array_map(function ($item) {
            return [$item->id, $item->name, $item->inward, $item->outward];
        }, $issueLinkTypes);
        $this->table($headers, $issueLinkTypesFlat);
    }

    protected $editissue = [];

    public function checktime()
    {
        $reqLite = $This->reqLite;
        $reqLite["jql"] = $this->jira->jql["VladyJiraPostponeTime"];
        $issues = $this->jira->getIssues($reqLite);
        foreach ($issues as $issue) {
            $this->closePostpone($issue["key"], 'Robot: Дата ожидаемого завершения работ ("Date of study resumption") в прошлом или незаполнена. Подробнее https://confluence.billing.ru/display/GFIMP/POSTPONE');
        }
    }

    public function checklink()
    {
        $this->req["jql"] = $this->jira->jql["VladyJiraPostpone"];
        $issues = $this->jira->getIssues($this->req);

        foreach ($issues as $issue) {
            $returnToWork = TRUE;
            if (isset($issue["fields"]["issuelinks"])) {
                foreach ($issue["fields"]["issuelinks"] as $i) {
                    if (isset($i["inwardIssue"]) && in_array($i["inwardIssue"]["fields"]["status"]["name"], $this->inWork)) {
                        $returnToWork = FALSE;
                        break;
                    }
                }
            }
            if ($returnToWork) {
                $this->closePostpone($issue["key"], "Robot v2: Все связанные задачи выполнены или требуют вашего вмешательства. Подробнее https://confluence.billing.ru/display/GFIMP/POSTPONE");
            }
        }
    }

    protected function closePostpone($key, $comment)
    {
        $this->editissue[] = $key;
        if ($this->argument('action') != 'list') {
            $this->jira->addComment($key, $comment);
            //Куда можно переключаться
            //https://jira.billing.ru/rest/api/2/issue/GFIMPL-7015/transitions?expand=transitions.fields
            $req = ["transition" =>
                ["id" => 151],
            ];
            $this->jira->transitionsIssue($key, $req);
        }
    }

    //"Correction is done","Open","Implementation estimation","Studying","Fix in the next version","Project manager review",
    //"Closed","Resolved","Request to customer","Nothing to change","Soft Close","Request","Corrected"
    //"Accepting",    "Received",
    //"Review",
    protected $inWork = ["In Progress", "Received", "Accepting", "Postpone", "Open",
        "Implementation estimation", "Studying", "Fix in the next version", "Temporary siolution prepration", "Analyzing", "Project manager review",
        "Project manager review", "Authorized"];

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

        if ($this->argument('action') == 'typelink') {
            $this->typeLinkShow();
            return;
        }

        $this->editissue = [];
        $this->checktime();
        if ($this->argument('action') != 'onlytime') {
            $this->checklink();
        }

        echo array_reduce($this->editissue, function ($carry, $item) {
            $carry .= ',' . $item;
            return $carry;
        });
    }

}
