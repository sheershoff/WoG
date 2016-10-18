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
            . ' {action? : list - Список эпиков с ответственными и командой, typelink - табличка со статусами, onlytime - выводить только по времени, onlyR}';

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
        "maxResults" => 2,
        "fields" => [
//            "assignee",
            "issuelinks",
//            "summary"
        ],
    ];

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
        $this->line('Вывод по дате');
        $reqLite = $this->reqLite;
        $reqLite["jql"] = $this->jira->jql["VladyJiraPostponeTime"];
        $issues = $this->jira->getIssues($reqLite);
        $bar = $this->output->createProgressBar(count($issues)); //количество
        foreach ($issues as $issue) {
            $bar->advance();
            $this->line(' ' . $issue["key"] . ' ');
            $this->closePostpone($issue["key"], 'Robot: Дата ожидаемого завершения работ ("Date of study resumption") в прошлом или незаполнена. Подробнее https://confluence.billing.ru/display/GFIMP/POSTPONE');
        }
    }

    function checkLinkItIsWork($i)
    {
        return (isset($i["inwardIssue"]) &&
                $i["inwardIssue"]["fields"]["issuetype"]["id"] != 10200 &&
                in_array($i["inwardIssue"]["fields"]["status"]["name"], $this->inWork)) ||
                (isset($i["outwardIssue"]) &&
                $i["outwardIssue"]["fields"]["issuetype"]["id"] == 10200 &&
                in_array($i["outwardIssue"]["fields"]["status"]["name"], $this->inWork));
    }

    public function checklink()
    {
        $this->req["jql"] = $this->jira->jql["VladyJiraPostpone"];
        $issues = $this->jira->getIssues($this->req);

        foreach ($issues as $issue) {
            $returnToWork = TRUE;
            if (isset($issue["fields"]["issuelinks"])) {
                foreach ($issue["fields"]["issuelinks"] as $i) {
                    if ($this->checkLinkItIsWork($i)) {
                        $returnToWork = FALSE;
                        break;
                    }
                }
            }
            if ($returnToWork) {
                $this->closePostpone($issue["key"], "Robot v3: Все связанные задачи выполнены или требуют вашего вмешательства. Подробнее https://confluence.billing.ru/display/GFIMP/POSTPONE");
            }
        }
    }

    protected $reqRequestAndResolved = [
        "maxResults" => 2,
        "fields" => [
//            "assignee",
            "comment",
            "resolution",
//            "summary"
        ],
    ];

    protected function checkRequestAndResolved()
    {
        if ($this->argument('action') == 'list') {
            return;
        }
        $this->reqRequestAndResolved["jql"] = $this->jira->jql["VladyJiraCloseRequestAndResolved"];
        $issues = $this->jira->getIssues($this->reqRequestAndResolved); //, 'expand=changelog');

        $this->line('RequestAndResolved');
        $bar = $this->output->createProgressBar(count($issues)); //количество

        foreach ($issues as $issue) {
            $bar->advance();
            //dd($issue);
            $x = array_pop($issue["fields"]["comment"]["comments"]);
            $body_v1 = 'БагаRobot: Задача находится без движения в течении 7 дней и будет закрыта автоматически через неделю. Если задача актуальна для вас и чего-то ждёт - добавьте комментарий с текущим статусом и причинами ожидания.';
            $body_v2 = 'БагаRobot: Задача находится статусе Request/Resolved без движения в течении 7 дней и будет закрыта автоматически через неделю. Если задача актуальна для вас и чего-то ждёт - добавьте комментарий с текущим статусом и причинами ожидания и задача не будет закрыта до следующего напоминания. https://confluence.billing.ru/display/GFIMP/feedback';
            if (($x["author"]["key"] == "vkhonin") && (($x["body"] == $body_v1) || ($x["body"] == $body_v2))) {
                $this->line(' ' . $issue["key"]);
                //$req = ["transition" => ["id" => 211]];
                if (!isset($issue["fields"]["resolution"])) {
                    $req = ["transition" => ["name" => "Closed"], "fields" => ["resolution" => ["id" => "1"]]];
                    echo " resolution";
                }
                if (!$this->jira->transitionsIssue($issue["key"], $req)) {
                    var_dump($req);
                    dd(json_decode($this->jira->transitionsIssue($issue["key"], NULL), TRUE));
                    return;
                }
                $this->jira->addComment($issue["key"], 'БагаRobot: Задача закрыта автоматически, т.к. находится в статусе Request/Resolved без движения более 2 недель и реакция на напоминания отсутствует. Подробнее https://confluence.billing.ru/display/GFIMP/feedback');
                $this->line(' closed');
            } else {
                $this->line(' ' . $issue["key"] . ' comment');
                $this->jira->addComment($issue["key"], $body_v2);
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

        //табличка с типами связи
        if ($this->argument('action') == 'typelink') {
            $this->typeLinkShow();
            return;
        }

        //Баги в которых материмся и закрываем
        $this->checkRequestAndResolved();
        if ($this->argument('action') == 'onlyR') {
            return;
        }

        //список багов к выходу из postpone
        $this->editissue = [];

        //по дате выхода
        $this->checktime();

        //по взаимосвязям
        if ($this->argument('action') != 'onlytime') {
            $this->checklink();
        }

        //список выведенных или планируемых к выводу
        echo array_reduce($this->editissue, function ($carry, $item) {
            $carry .= ',' . $item;
            return $carry;
        });
    }

}
