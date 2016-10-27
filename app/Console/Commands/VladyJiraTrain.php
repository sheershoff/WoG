<?php

namespace App\Console\Commands;

class VladyJiraTrain extends VladyJiraCommand
{

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'jira:train {action? : list просто вывести список}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Создаём таски на электричку.';

    /*
     *  запрос для получения списка закрытых багов
     */
    protected $req = [
        "jql" => 'project = clm AND status="Correction is done" and updated > -21d ORDER BY status DESC, updatedDate DESC', //and key=CLM-167564
        "maxResults" => 10,
        "fields" => [
            "comment",
            "customfield_12397", // "Issue summary"
            "issuelinks",
        ],
    ];
    protected $reqTagJql = 'project = TRAIN AND (status != Closed OR resolution != Duplicate) AND summary ~ ';
    protected $reqTag = [
        "jql" => '',
        "maxResults" => 20,
        "fields" => [
//            "comment",
//            "customfield_12397", // "Issue summary"
            "summary",
            "issuelinks",
            "project",
            "issuetype",
        ],
    ];

    /*
     * список задач к обработке
     */
    protected $editissue = [];

    /*
     * выражение для поиска названия версии и
     */
    protected $re = '/Implemented in (.*)(_| |)([\d|\.]*)($|\\n)/mi';
    protected $reLine = '/(.*)(_| |)([\d|\.]+)(, |,|$|\\\\n)/miU';

    /*
     * Получаем массив задач
     */

    protected function buildSystamList($issue, $links)
    {
        $finel_note = $issue["fields"]['customfield_12397'];
        foreach ($issue["fields"]["comment"]["comments"] as $c) {
            if ($c["author"]["name"] == 'JIRA_Service') {
                $matches = [];
                if (preg_match($this->re, $c['body'], $matches)) {
                    $outs = [];
                    $app = trim($matches[1] . ' ' . $matches[3]);
                    if (preg_match_all($this->reLine, $app, $outs, PREG_SET_ORDER)) {
//dd($outs);
                        foreach ($outs as $out) {
                            $this->editissue[] = ['key' => $issue['key'], 'system' => trim($out[1]), 'version' => trim($out[3]), 'links' => $links, 'note' => $finel_note, $matches[0]];
                        }
                    } else {
                        $this->editissue[] = ['key' => $issue['key'], 'system' => $matches[1], 'version' => $matches[3], 'links' => $links, 'note' => $finel_note];
                    }
                } else {
                    echo $c['body'];
                }
            }
        }
    }

    protected $project = ['GFIMPL', 'GFBPTST']; //'CLM'

//    function checkLinkItIsWork($i)
//    {
//        return ((isset($i["inwardIssue"]) && $i["type"]["id"] == 10200) ||
//                (isset($i["outwardIssue"]) && $i["type"]["id"] != 10200)) && $this->checkProjectLink($i);
//    }

    protected function extractLink($i)
    {
        if (isset($i["inwardIssue"])) {
            $r = $i["inwardIssue"];
            $r['ward'] = 'in';
        } else {
            $r = $i["outwardIssue"];
            $r['ward'] = 'out';
        }
//        if ((isset($i["inwardIssue"]) && $i["type"]["id"] == 10200) ||
//            (isset($i["outwardIssue"]) && $i["type"]["id"] != 10200))

        $r["type"] = $i["type"];
        $re = '/(\w*)/ix';
        $matches = '';
        preg_match($re, $r["key"], $matches);
        $r['project'] = $matches[1];
        return $r;
    }

    function listLink($issue)
    {
        $links = [];
        //Если что-то прилинковано
        if (isset($issue["fields"]["issuelinks"])) {
            //то идём по списку линков
            //dd($issue["fields"]["issuelinks"]);
            foreach ($issue["fields"]["issuelinks"] as $i) {
                $links[] = $this->extractLink($i);
            }
        }
        return $links;
    }

    static function callback_from_diff_array_for_key_property($a, $b)
    {
        if ($a["key"] < $b["key"]) {
            return -1;
        } elseif ($a["key"] > $b["key"]) {
            return 1;
        } else {
            return 0;
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
        $issues = $this->jira->getIssues($this->req);
        $this->clm = FALSE;
        //$bar = $this->output->createProgressBar(count($issues)); //количество
        //идём по списку CLM и собираем с них ссылки
        foreach ($issues as $issue) {
            //$bar->advance();
            //$this->line(' ' . $issue["key"]);
            $this->buildSystamList($issue, $this->listLink($issue));
        }
        //dd($this->editissue);
        //теперь по полученному списку работаем
        $bar = $this->output->createProgressBar(count($this->editissue)); //количество
        foreach ($this->editissue as $clm_links) {
            $bar->advance();
            //1.Проверяем есть ли такой TRAIN
            $summory = $clm_links['system'] . ' ' . $clm_links['version'];
            echo ' ' . $clm_links['key'] . ' ' . $summory;
            $this->reqTag['jql'] = $this->reqTagJql . '"' . $summory . '" ORDER BY status ASC';
            $train = $this->jira->getIssues($this->reqTag);
            if ($train == []) {
                //Если нет - создаём
                $req = ["fields" => ["project" => ['id' => '16900'], "issuetype" => ['id' => '6'], 'priority' => ['id' => '10000'], "summary" => $clm_links['system'] . ' ' . $clm_links['version']]];
                if (!$this->jira->createIssue($req)) {
                    dd($req);
                } else {
                    $train = $this->jira->getIssues($this->reqTag);
                }
            };
            //Если по фильтру нашли несколько тасков? то берём первый
            if (is_array($train)) {
                $train = $train[0];
            }
            $listLink = $this->listLink($train);
            //2.проверяем его линки
            $links = array_udiff($clm_links['links'], $listLink, array($this, 'callback_from_diff_array_for_key_property'));
//            dd($links); //$type, $inwardIssue, $outwardIssue, $comment)
            foreach ($links as $link) {
                if (in_array($link["project"], $this->project)) {
                    if ($link['ward'] == 'in') {
                        $this->jira->createIssueLink($link["type"]["name"], $link["key"], $train['key']);
                    } else {
                        $this->jira->createIssueLink($link["type"]["name"], $train['key'], $link["key"]);
                    }
                    echo ' ' . $link["key"];
                }
            }
            if (array_udiff([['key' => $clm_links['key']]], $listLink, array($this, 'callback_from_diff_array_for_key_property')) != []) {
                $this->jira->createIssueLink('realizes', $train['key'], $clm_links['key']);
                if ($clm_links['note'] != '') {
                    if (!$this->jira->addComment($train['key'], $clm_links['note'])) {
//                        $this->jira->addComment($train['key'], 'xxx');
                        //dd([$train['key'], $clm_links['note']]); //Сейчас на это нет прав!!!
                    }
                }
            }
            echo "\n";
        }
////
//список выведенных или планируемых к выводу
//        echo array_reduce($this->editissue, function ($carry, $item) {
//            $carry .= ',' . $item;
//            return $carry;
//        });
//dd($this->editissue);
    }

}
