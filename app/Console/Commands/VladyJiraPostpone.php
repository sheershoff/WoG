<?php

namespace App\Console\Commands;

class VladyJiraPostpone extends VladyJiraCommand
{

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'jira:postpone {action? : list просто вывести список}';

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
        "jql" => 'project = GFIMPL AND status=postpone AND "Причина ожидания" != "Исправление ошибки на внешней платформе" ORDER BY assignee',
//        "maxResults" => 2,
        "fields" => [
//            "assignee",
            "issuelinks",
//            "summary"
        ],
    ];
    protected $editissue = [];

    //проверяем, что связанные задачи? это задачи в работе
    function checkLinkItIsWork($i)
    {
        return (isset($i["inwardIssue"]) &&
                $i["type"]["id"] != 10200 &&
                in_array($i["inwardIssue"]["fields"]["status"]["name"], $this->inWork)) ||
                (isset($i["outwardIssue"]) &&
                $i["type"]["id"] == 10200 &&
                in_array($i["outwardIssue"]["fields"]["status"]["name"], $this->inWork));
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
     */
    public function handle()
    {
        $issues = $this->jira->getIssues($this->req);

        //идём по списку тасков
        foreach ($issues as $issue) {
            $returnToWork = TRUE;
            //Если что-то прилинковано
            if (isset($issue["fields"]["issuelinks"])) {
                //то идём по списку линков
                foreach ($issue["fields"]["issuelinks"] as $i) {
                    //каждый линк смотрим - работа это или нужно вывести
                    if ($this->checkLinkItIsWork($i)) {
                        $returnToWork = FALSE; //да? работа? выводить не нужно
                        break;
                    }
                }
            }
            //выводим
            if ($returnToWork) {
                $this->closePostpone($issue["key"], "Robot v4: Все связанные задачи выполнены или требуют вашего вмешательства. Подробнее https://confluence.billing.ru/display/GFIMP/POSTPONE");
            }
        }

        //список выведенных или планируемых к выводу
        echo array_reduce($this->editissue, function ($carry, $item) {
            $carry .= ',' . $item;
            return $carry;
        });
    }

}
