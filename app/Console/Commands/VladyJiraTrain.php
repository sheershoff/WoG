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
        "jql" => 'project = TRAIN AND summory ~ ', //and key=CLM-167564
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
        $finel_note = $issue["fields"]["customfield_12397"];
        foreach ($issue["fields"]["comment"]["comments"] as $c) {
            if ($c["author"]["name"] == 'JIRA_Service') {
                $matches = [];
                if (preg_match($this->re, $c['body'], $matches)) {
                    $outs = [];
                    if (preg_match_all($this->reLine, trim($matches[1] . ' ' . $matches[3]), $outs, PREG_SET_ORDER)) {
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

    protected function getKeyLink($i)
    {
        return $this->chechInwardIssue($i) ? $i["inwardIssue"]["key"] : $i["outwardIssue"]["key"];
    }

    protected $clm = FALSE;

    protected function checkProjectLink($i)
    {
        $key = $this->getKeyLink($i);
        return (substr($key, 0, 6) == 'GFIMPL') || (substr($key, 0, 7) == 'GFBPTST') || ($this->clm && (substr($key, 0, 3) == 'CLM'));
    }

    function checkLinkItIsWork($i)
    {
        return ((isset($i["inwardIssue"]) && $i["type"]["id"] == 10200) ||
                (isset($i["outwardIssue"]) && $i["type"]["id"] != 10200)) && $this->checkProjectLink($i);
    }

    protected function extractLink($i)
    {
        return isset($i["inwardIssue"]) ? $i["inwardIssue"] : $i["outwardIssue"];
    }

    protected function chechInwardIssue($i)
    {
        return isset($i["inwardIssue"]);
    }

    function listLinkKey($issue)
    {
        $links = [];
//Если что-то прилинковано
        if (isset($issue["fields"]["issuelinks"])) {
//то идём по списку линков
            //dd($issue["fields"]["issuelinks"]);
            foreach ($issue["fields"]["issuelinks"] as $i) {
                if ($this->checkLinkItIsWork($i)) {
                    dd($i["fields"]["issuetype"]["name"]);
                    $links[] = ['link' => $this->getKeyLink($i), 'type' => $i["fields"]["issuetype"]["name"]];
                }
            }
        }
        return $links;
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
        $bar = $this->output->createProgressBar(count($issues)); //количество
//идём по списку тасков
        foreach ($issues as $issue) {
            $bar->advance();
            $this->line(' ' . $issue["key"]);
            $links = $this->listLinkKey($issue);
            $links[] = $issue["key"];
            $this->buildSystamList($issue, $links);
        }
        //dd($this->editissue);
        //теперь по полученному списку работаем с тагами
        $this->clm = TRUE;
        $bar = $this->output->createProgressBar(count($this->editissue)); //количество
        foreach ($this->editissue as $i) {
            //1.Проверяем есть ли такой TAG
            echo ' ' . $i['system'] . ' ' . $i['version'] . "\n";
            $this->reqTag['jql'] = $this->reqTagJql . '"' . $i['system'] . ' ' . $i['version'] . '" ORDER BY status ASC';
            $tag = $this->jira->getIssues($this->reqTag);
            if ($tag == []) {
                //Если нет - создаём
                $req = ["fields" => ["project" => ['id' => '16900'], "issuetype" => ['id' => '6'], 'priority' => ['id' => '10000'], "summary" => $i['system'] . ' ' . $i['version']]];
                if (!$this->jira->createIssue($req)) {
                    dd($req);
                } else {
                    $tag = $this->jira->getIssues($this->reqTag);
                }
            };
            //Если по фильтру нашли несколько тасков? то берём первый
            if (is_array($tag)) {
                $tag = $tag[0];
            }
            //2.проверяем его линки
            $links = array_diff($i['links'], $this->listLinkKey($tag));
            foreach ($links as $link) {
                $this->jira->createIssueLink();
            }
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
