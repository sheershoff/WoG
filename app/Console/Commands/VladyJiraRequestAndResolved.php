<?php

namespace App\Console\Commands;

use App\Models\User;

class VladyJiraRequestAndResolved extends VladyJiraCommand
{

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'jira:RequestAndResolved'
            . ' {action? : list - только список, onlycomment - только добавить комментарии, closelist - только список к закрытию}';

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
        "jql" => 'project = GFIMPL AND status in (Resolved, Request) and updatedDate<-7d ORDER BY priority DESC',
        "maxResults" => 2,
        "fields" => [
//            "assignee",
            "comment",
            "resolution",
//            "summary"
        ],
    ];
    protected $editissue = [];
    protected $body = [
        1 => 'БагаRobot: Задача находится без движения в течении 7 дней и будет закрыта автоматически через неделю. Если задача актуальна для вас и чего-то ждёт - добавьте комментарий с текущим статусом и причинами ожидания.',
        0 => 'БагаRobot: Задача находится статусе Request/Resolved без движения в течении 7 дней и будет закрыта автоматически через неделю. Если задача актуальна для вас и чего-то ждёт - добавьте комментарий с текущим статусом и причинами ожидания и задача не будет закрыта до следующего напоминания. https://confluence.billing.ru/display/GFIMP/feedback'
    ];

    /**
     * Execute the console command.
     *
     * @return mixed
     *
     */
    public function handle()
    {

//        if ($this->argument('action') == 'list') {

        $issues = $this->jira->getIssues($this->req); //, 'expand=changelog');

        $bar = $this->output->createProgressBar(count($issues)); //количество

        foreach ($issues as $issue) {
            $bar->advance();
            //dd($issue);
            //читаем последний комментарий
            $x = array_pop($issue["fields"]["comment"]["comments"]);

            if (($x["author"]["key"] == "vkhonin") && in_array($x["body"], $this->body)) {
                //комментарий уже был и пора закрывать задачу
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
                //комментария ещё не было
                $this->line(' ' . $issue["key"] . ' comment');
                $this->jira->addComment($issue["key"], $this->body[0]);
            }
        }


        //список выведенных или планируемых к выводу
        echo array_reduce($this->editissue, function ($carry, $item) {
            $carry .= ',' . $item;
            return $carry;
        });
    }

}
