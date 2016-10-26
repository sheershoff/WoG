<?php

namespace App\Console\Commands;

class VladyJiraPostponeTime extends VladyJiraCommand
{

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'jira:postponetime {action? : list просто вывести список}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Выводим из Postpone тех кто недолжен быть по времени.';

    /*
     *  запрос для поиска таких багов
     */
    protected $req = [
        'jql' => 'project = GFIMPL AND status = Postpone and ("Date of study resumption" is null or "Date of study resumption"<now())  ORDER BY priority DESC',
//        "maxResults" => 2,
        "fields" => [
            "customfield_12385"
        ],
    ];

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

    /**
     * Execute the console command.
     *
     * @return mixed
     *
     */
    public function handle()
    {
        //список багов к выходу из postpone
        $this->editissue = [];

        $issues = $this->jira->getIssues($this->req);
        $bar = $this->output->createProgressBar(count($issues)); //количество
        foreach ($issues as $issue) {
            $bar->advance();
            $this->line(' ' . $issue["key"] . ' ');
            if ($issue["fields"]["customfield_12385"]) {
                $this->closePostpone($issue["key"], 'Robot: Дата ожидаемого завершения работ ("Date of study resumption"=' . $issue["fields"]["customfield_12385"] . ') в прошлом. Подробнее https://confluence.billing.ru/display/GFIMP/POSTPONE');
            } else {
                $this->closePostpone($issue["key"], 'Robot: Дата ожидаемого завершения работ ("Date of study resumption") не заполнена. Подробнее https://confluence.billing.ru/display/GFIMP/POSTPONE');
            }
        }

        //список выведенных или планируемых к выводу
        echo "\n" . array_reduce($this->editissue, function ($carry, $item) {
            $carry .= ',' . $item;
            return $carry;
        });
    }

}
