<?php

namespace App\Console\Commands;

use Illuminate\Support\Facades\Mail;

/*
 * ещё одна недоделанная автоматизация по борьбе с неправильными назначениями на сотрудников
 */

class VladyJiraEpic extends VladyJiraCommand
{

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'jira:epic'
            . ' {action : cc - список тех, на кого задача назначена не корректно|list - Список эпиков с ответственными и командой|null - пустой эпик}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Список эпиков с ответственными и командой.';

    /*
     *  запрос для получения списка закрытых багов
     */
    protected $reqList = [
        'jql' => 'project in (GFIMPL,"OneBSS PMO") AND status!=closed AND issuetype = Epic ORDER BY assignee',
//        "maxResults" => 2,
        "fields" => [
            "assignee",
            "customfield_10001", //cc
            "summary"
        ],
    ];
    protected $reqEpicNull = [//
        'jql' => 'project = GFIMPL AND status=open AND ("Epic Link" is EMPTY or "Epic Link" = "GFIMPL-6674") AND type not in (Sub-task, Epic) ORDER BY priority DESC',
        "maxResults" => 60,
        "fields" => [
            "status",
            "customfield_10201",
//            "assignee",
//            "customfield_10001", //cc
            "summary"
        ],
    ];
    protected $epic = 'GFIMPL-6674'; //Не верное заведение (к закрытию)

    protected function epicNull()
    {
        $issues = $this->jira->getIssues($this->reqEpicNull);
        $bar = $this->output->createProgressBar(count($issues)); //количество
//        dd($issues);
        foreach ($issues as $issue) {
            $bar->advance();
            //Пропускаем ломаные имплы (Пока их не починят)
            if (in_array($issue["key"], ["GFIMPL-11110", "GFIMPL-11111", "GFIMPL-11108", "GFIMPL-11107"])) {
                continue;
            }
            echo ' ' . $issue["key"] . ':';
            //Проставляем эпик
            if ($issue["fields"]["customfield_10201"] == "") {
                $req = ["fields" => ["customfield_10201" => $this->epic]];
                $this->jira->editIssue($issue["key"], $req);
            }
            //Проставляем статус реквест
            $req = ["transition" => ["id" => $this->jira->transitionsDst($issue["key"], "Request")]];
            if ($this->jira->transitionsIssue($issue["key"], $req)) {
                $this->jira->addComment($issue["key"], 'Не заполнено поле Epic Link. Поправьте Epic или задача будет закрыта https://confluence.billing.ru/display/GFIMP/Jira');
            } else {
                dd(json_decode($this->jira->transitionsIssue($issue["key"])));
            }
            echo "\n";
        }
    }

    protected $reqCC = [
        'jql' => 'project in (GFIMPL,"OneBSS PMO") AND status!=closed AND issuetype = Epic and issue!=GFIMPL-6674 ORDER BY assignee',
        //"maxResults" => 1000,
        "fields" => [
            "assignee",
            "customfield_10001", //cc
            //"issuelinks",
            "summary"
        ],
    ];
    protected $reqCCListJql = 'project = GFIMPL AND status!=closed AND status!=request AND status!=Resolved AND issuetype != Epic and updated<-3d and "Epic Link" = ';
    protected $reqCCList = [
        //"maxResults" => 200,
        "fields" => [
            "assignee",
            "updated",
//            "customfield_10001", //cc
            //"issuelinks",
            "summary",
        ],
    ];

    protected function epicCC()
    {
        $epics = $this->jira->getIssues($this->reqCC);
        $bar = $this->output->createProgressBar(count($epics)); //количество
//        dd($epics);
        foreach ($epics as &$epic) {
            $bar->advance();
            echo ' ' . $epic['key'] . ' ' . $epic['fields']["summary"] . ' ' . $epic['fields']["assignee"]["name"] . ':';
            $cc = $epic["fields"]["customfield_10001"];
            //dd();
            $this->reqCCList['jql'] = $this->reqCCListJql . $epic['key'];
            $issues = $this->jira->getIssues($this->reqCCList);

            //Количество GFIMPL не нулевое (иначе? не наш клиент)
            if (count($this->reqCCList) == 0) {
                $epic = FALSE;
                continue;
            }

            if ($cc == '') {
                $cc = [];
            }
            if (count($cc) <= 1) {
                echo ($cc == '') ? 'CC is null ' : 'CC <3';
                $body = "Пожалуйста, заполните СС членами вашей команды, на которой могут быть задачи эпика. Или обратитесь к Вадиму Юрене для смены ответственного за эпик.";
            } else {
                $body = 'Пожалуйста, обратите внимение на следующие задачи и уточните ответственных по ним.';
            }
            //Преобразуем список CC в простой список
            array_walk($cc, function(&$item) {
                $item = $item["key"];
            });
            //выковыриваем косячные таски или с подозрением на них
            $error = [];
            foreach ($issues as $issue) {
                if (!in_array($issue['fields']["assignee"]["key"], $cc)) {
                    //$error[$issue["key"]] = $issue['fields']["assignee"]["key"];
                    $error[] = $issue;
                }
            }
            $to = $epic['fields']["assignee"]["emailAddress"];
            //$to = 'vladimir.khonin@megafon.ru';
            $tocc = ['vladimir.khonin@megafon.ru', 'vyurenya@Megafon.ru', 'Irina.Imaykina@megafon.ru'];
            if ($error != []) {
                Mail::send('emails.epicCC', [
                    'body' => $body,
                    'issuesError' => $error,
                    'epickey' => $epic['key'],
                    'epicname' => $epic['fields']["summary"],
                    'epicCC' => $epic["fields"]["customfield_10001"],
                        ], function($message) use ($to, $epic, $tocc) {
                    $message->to($to)->cc($tocc)->subject('VladyJiraEpicCC контроль СС в ' . $epic['fields']["summary"]);
                });
            }
        }
//        dd($epics);
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
        //https://jira.billing.ru/browse/GFIMPL-6674 - Не верное заведение (к закрытию)
        //Прошу заполнить эпик или задача будет закрыта. Подробнее https://confluence.billing.ru/display/GFIMP/Jira

        if ($this->argument('action') == 'list') {
            $req = $this->reqList;
        } else if ($this->argument('action') == 'cc') {
            $this->epicCC();
            return;
        } else if ($this->argument('action') == 'null') {
            $this->epicNull();
            return;
        } else {
            $this->line('list|cc|run|null');
        }
        $issues = $this->jira->getIssues($req);
        if ($this->argument('action') == 'list') {
            //просто список
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
                        $issue["fields"]["assignee"]["emailAddress"] . ' ( ' .
                        (isset($issue["fields"]["customfield_10001"]) ? ' cc ' : 'no') . '/' .
                        ($x ? 'link' : 'no ') . ")";
            }, $issues);
            dd($data);
        }
    }

}
