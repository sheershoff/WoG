<?php

namespace App\Http\Controllers;

/**
 * Ищем пользователей в jira
 * GET /rest/api/2/user/search
 * https://docs.atlassian.com/jira/REST/cloud/#api/2/user-findUsersWithBrowsePermission
 *
 */
use App\Handlers\VladyJiraQuest;
use Cache;

class VladyJiraGanttController extends Controller
{

    protected $jira = null;

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        //parent::__construct();
        $this->jira = new VladyJiraQuest();
    }

    protected $req = [//"jql"=>"project=GFIMPL AND type=Bug AND status!=closed order by created desc",
        "jql" => //
        'project = GFPMO AND ((status != closed AND status != resolved) or (updated > -14d and type != Epic)) AND type in (Story, Epic) ORDER BY type ASC, due ASC', //без ограничения до 15.08.2016
        //'project = GFPMO AND ((status != closed AND status != resolved) or updated > -14d) AND ((type = Story and (duedate is null or duedate<=2016-08-31)) or type = Epic) ORDER BY type ASC, due ASC',
        //"maxResults"=>2,
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

    public function index()
    {
        if (Cache::has('gantt')) {
            return Cache::get('gantt');
        }
        $data = $this->buildData();
        if (!$data) {
            return false;
        }
        Cache::put('gantt', json_encode($data), 60 * 24);
        return json_encode($data);
    }

    protected function buildData()
    {

        $dataI = $this->jira->getIssues($this->req);
        if (!isset($dataI) || $dataI == []) {
            return FALSE;
        }
        $data = array_map(
                function ($issue) {
            $datetime1 = date_create($issue["fields"]["customfield_14801"]);
            $datetime2 = date_create($issue["fields"]["duedate"]);
            if ($datetime1 && $datetime2 && $issue["fields"]["customfield_14801"] != '') {
                $interval = date_diff($datetime1, $datetime2, TRUE);
                $d = (int) ($interval->format('%a'));
                //echo $issue["fields"]["customfield_14801"].' - '.$issue["fields"]["duedate"].' = '.$interval->format('%a')."\n";
            } else
                $d = 0;
            ;
            return [
                'id' => $issue["key"], //(int)$issue["id"],
                'start_date' => $issue["fields"]["duedate"],
                'duration' => $d,
                'priority' => $issue["fields"]["status"]["name"] == "Closed" ? "Closed" : $issue["fields"]["priority"]["name"],
                'type' => $issue["fields"]["issuetype"]["name"] == "Story" ? "task" : "project",
                'progress' => $issue["fields"]["progress"]["progress"],
                'parent' => $issue["fields"]["issuetype"]["name"] == "Story" ? $issue["fields"]["customfield_10201"] : $issue["fields"]["assignee"]["emailAddress"],
                'open' => TRUE,
                //'text'=>'',
                'summary' => $issue["fields"]["summary"],
                'desc' => $issue["fields"]["description"],
                'text' =>
                $issue["fields"]["issuetype"]["name"] == "Story" ?
                        $issue["fields"]["description"] :
                        $issue["fields"]["summary"],
            ];
        }, $dataI);
        $dataA = [];
        foreach ($data as $value) {
            if ($value["type"] == "project") {
                $dataA[$value["parent"]] = [
                    'start_date' =>
                    !array_key_exists($value["parent"], $dataA) ||
                    $dataA[$value["parent"]]['start_date'] > $value['start_date'] ?
                            $value['start_date'] :
                            $dataA[$value["parent"]]['start_date'],
                ];
            }
        }
        $data2 = array_map(
                function ($key, $val) {
            return [
                'id' => $key, //(int)$issue["id"],
                'start_date' => $val["start_date"],
                'type' => "project",
                'open' => TRUE,
                //'text'=>'',
                'summary' => $key,
                'desc' => $key,
                'text' => $key,
            ];
        }, array_keys($dataA), $dataA);
        $data = array_merge($data, $data2);
        /* 	"data": [{
          "id": 1,
          "start_date": "2013-04-01 00:00:00",
          "duration": 5,
          "text": "Project #1",
          "progress": 0.8,
          "sortorder": 20,
          "parent": 0,
          "open": true
          } */
        //echo count($data);
        /*    	"collections": {
          "links": [{
          "id": 1,
          "source": 1,
          "target": 2,
          "type": "0"
          }, {
         */
        $links = [];
        foreach ($dataI as $issue) {
            //var_dump($issue);
            if ($issue["fields"]["issuelinks"] == []) {
                continue;
            }
            foreach ($issue["fields"]["issuelinks"] as $value) {
                if (!array_key_exists("outwardIssue", $value)) {
                    //var_dump($value);
                    continue;
                }//inwardIssue?
                $links[] = [
                    'id' => $value["id"],
                    "type" => 0,
                    "mytype" => $value["type"]["name"],
                    'source' => $issue["key"],
                    'target' => $value["outwardIssue"]["key"],
                ];
                /*  {"0":[{"id":"675006",
                 *    "self":"https:\/\/jira.billing.ru\/rest\/api\/2\/issueLink\/675006",
                 *    "type":{"id":"10200","name":"Depends","inward":"is depended on by ","outward":"depends on","self":"https:\/\/jira.billing.ru\/rest\/api\/2\/issueLinkType\/10200"},
                 *    "outwardIssue":{
                 *        "id":"629051",
                 *        "key":"GFPMO-789",
                 *        "self":"https:\/\/jira.billing.ru\/rest\/api\/2\/issue\/629051",
                 *        "fields":{
                 *            "summary":"4. \u0420\u0430\u0437\u0440\u0430\u0431\u043e\u0442\u043a\u0430 \u043f\u0440\u043e\u0435\u043a\u0442\u043d\u043e\u0433\u043e \u0434\u043e\u043a\u0443\u043c\u0435\u043d\u0442\u0430 (FRD + \u0422\u0417 + GAP) ",
                 *            "status":{"self":"https:\/\/jira.billing.ru\/rest\/api\/2\/status\/3","description":"This issue is being actively worked on at the moment by the assignee.","iconUrl":"https:\/\/jira.billing.ru\/images\/icons\/statuses\/inprogress.png","name":"In Progress","id":"3","statusCategory":{"self":"https:\/\/jira.billing.ru\/rest\/api\/2\/statuscategory\/4","id":4,"key":"indeterminate","colorName":"yellow","name":"In Progress"}},
                 *            "priority":{"self":"https:\/\/jira.billing.ru\/rest\/api\/2\/priority\/4","iconUrl":"https:\/\/jira.billing.ru\/images\/icons\/priorities\/minor.png","name":"Minor","id":"4"},
                 *            "issuetype":{"self":"https:\/\/jira.billing.ru\/rest\/api\/2\/issuetype\/6","id":"6","description":"Created by JIRA Agile - do not edit or delete. Issue type for a user story.","iconUrl":"https:\/\/jira.billing.ru\/images\/icons\/issuetypes\/genericissue.png","name":"Story","subtask":false}
                 *        }
                 *    }
                 * },{
                 *    "id":"675002",
                 *    "self":"https:\/\/jira.billing.ru\/rest\/api\/2\/issueLink\/675002",
                 *    "type":{"id":"10200","name":"Depends","inward":"is depended on by ","outward":"depends on","self":"https:\/\/jira.billing.ru\/rest\/api\/2\/issueLinkType\/10200"},"outwardIssue":{"id":"629054","key":"GFPMO-790","self":"https:\/\/jira.billing.ru\/rest\/api\/2\/issue\/629054","fields":{"summary":"5. \u0421\u043e\u0433\u043b\u0430\u0441\u043e\u0432\u0430\u043d\u0438\u0435 \u043f\u0440\u043e\u0435\u043a\u0442\u043d\u043e\u0433\u043e \u0434\u043e\u043a\u0443\u043c\u0435\u043d\u0442\u0430 \u0441 \u0420\u0413 \u043f\u0438\u043b\u043e\u0442-\u043f\u0440\u043e\u0435\u043a\u0442\u0430","status":{"self":"https:\/\/jira.billing.ru\/rest\/api\/2\/status\/3","description":"This issue is being actively worked on at the moment by the assignee.","iconUrl":"https:\/\/jira.billing.ru\/images\/icons\/statuses\/inprogress.png","name":"In Progress","id":"3","statusCategory":{"self":"https:\/\/jira.billing.ru\/rest\/api\/2\/statuscategory\/4","id":4,"key":"indeterminate","colorName":"yellow","name":"In Progress"}},"priority":{"self":"https:\/\/jira.billing.ru\/rest\/api\/2\/priority\/4","iconUrl":"https:\/\/jira.billing.ru\/images\/icons\/priorities\/minor.png","name":"Minor","id":"4"},"issuetype":{"self":"https:\/\/jira.billing.ru\/rest\/api\/2\/issuetype\/6","id":"6","description":"Created by JIRA Agile - do not edit or delete. Issue type for a user story.","iconUrl":"https:\/\/jira.billing.ru\/images\/icons\/issuetypes\/genericissue.png","name":"Story","subtask":false}}}},{"id":"674999","self":"https:\/\/jira.billing.ru\/rest\/api\/2\/issueLink\/674999","type":{"id":"10200","name":"Depends","inward":"is depended on by ","outward":"depends on","self":"https:\/\/jira.billing.ru\/rest\/api\/2\/issueLinkType\/10200"},"outwardIssue":{"id":"629383","key":"GFPMO-793","self":"https:\/\/jira.billing.ru\/rest\/api\/2\/issue\/629383","fields":{"summary":"8. \u0423\u0447\u0435\u0442 \u0437\u0430\u043c\u0435\u0447\u0430\u043d\u0438\u0439 \u043f\u043e \u0438\u0442\u043e\u0433\u0430\u043c Prove of concept, \u0434\u043e\u0440\u0430\u0431\u043e\u0442\u043a\u0430 \u043f\u0440\u043e\u0442\u043e\u0442\u0438\u043f\u0430","status":{"self":"https:\/\/jira.billing.ru\/rest\/api\/2\/status\/3","description":"This issue is being actively worked on at the moment by the assignee.","iconUrl":"https:\/\/jira.billing.ru\/images\/icons\/statuses\/inprogress.png","name":"In Progress","id":"3","statusCategory":{"self":"https:\/\/jira.billing.ru\/rest\/api\/2\/statuscategory\/4","id":4,"key":"indeterminate","colorName":"yellow","name":"In Progress"}},"priority":{"self":"https:\/\/jira.billing.ru\/rest\/api\/2\/priority\/4","iconUrl":"https:\/\/jira.billing.ru\/images\/icons\/priorities\/minor.png","name":"Minor","id":"4"},"issuetype":{"self":"https:\/\/jira.billing.ru\/rest\/api\/2\/issuetype\/6","id":"6","description":"Created by JIRA Agile - do not edit or delete. Issue type for a user story.","iconUrl":"https:\/\/jira.billing.ru\/images\/icons\/issuetypes\/genericissue.png","name":"Story","subtask":false}}}},{"id":"675005","self":"https:\/\/jira.billing.ru\/rest\/api\/2\/issueLink\/675005","type":{"id":"10200","name":"Depends","inward":"is depended on by ","outward":"depends on","self":"https:\/\/jira.billing.ru\/rest\/api\/2\/issueLinkType\/10200"},"outwardIssue":{"id":"629385","key":"GFPMO-794","self":"https:\/\/jira.billing.ru\/rest\/api\/2\/issue\/629385","fields":{"summary":"9. \u0414\u0435\u043c\u043e\u043d\u0441\u0442\u0440\u0430\u0446\u0438\u044f \u043d\u0430\u0441\u0442\u0440\u043e\u0435\u043d\u043d\u043e\u0433\u043e \u04152\u0415 \u043f\u0440\u043e\u0446\u0435\u0441\u0441\u0430 \u043d\u0430 \u043f\u0440\u0438\u043c\u0435\u0440\u0435 \u043d\u0435\u0442\u0438\u043f\u043e\u0432\u043e\u0439 \u0438\u043d\u0438\u0446\u0438\u0430\u0442\u0438\u0432\u044b \u0422\u041e\u041f 10 ","status":{"self":"https:\/\/jira.billing.ru\/rest\/api\/2\/status\/3","description":"This issue is being actively worked on at the moment by the assignee.","iconUrl":"https:\/\/jira.billing.ru\/images\/icons\/statuses\/inprogress.png","name":"In Progress","id":"3","statusCategory":{"self":"https:\/\/jira.billing.ru\/rest\/api\/2\/statuscategory\/4","id":4,"key":"indeterminate","colorName":"yellow","name":"In Progress"}},"priority":{"self":"https:\/\/jira.billing.ru\/rest\/api\/2\/priority\/4","iconUrl":"https:\/\/jira.billing.ru\/images\/icons\/priorities\/minor.png","name":"Minor","id":"4"},"issuetype":{"self":"https:\/\/jira.billing.ru\/rest\/api\/2\/issuetype\/6","id":"6","description":"Created by JIRA Agile - do not edit or delete. Issue type for a user story.","iconUrl":"https:\/\/jira.billing.ru\/images\/icons\/issuetypes\/genericissue.png","name":"Story","subtask":false}}}},{"id":"675004","self":"https:\/\/jira.billing.ru\/rest\/api\/2\/issueLink\/675004","type":{"id":"10200","name":"Depends","inward":"is depended on by ","outward":"depends on","self":"https:\/\/jira.billing.ru\/rest\/api\/2\/issueLinkType\/10200"},"outwardIssue":{"id":"629387","key":"GFPMO-795","self":"https:\/\/jira.billing.ru\/rest\/api\/2\/issue\/629387","fields":{"summary":"10. \u041f\u043e\u0434\u0432\u0435\u0434\u0435\u043d\u0438\u0435 \u0438\u0442\u043e\u0433\u043e\u0432 \u043f\u0438\u043b\u043e\u0442-\u043f\u0440\u043e\u0435\u043a\u0442\u0430 ","status":{"self":"https:\/\/jira.billing.ru\/rest\/api\/2\/status\/3","description":"This issue is being actively worked on at the moment by the assignee.","iconUrl":"https:\/\/jira.billing.ru\/images\/icons\/statuses\/inprogress.png","name":"In Progress","id":"3","statusCategory":{"self":"https:\/\/jira.billing.ru\/rest\/api\/2\/statuscategory\/4","id":4,"key":"indeterminate","colorName":"yellow","name":"In Progress"}},"priority":{"self":"https:\/\/jira.billing.ru\/rest\/api\/2\/priority\/4","iconUrl":"https:\/\/jira.billing.ru\/images\/icons\/priorities\/minor.png","name":"Minor","id":"4"},"issuetype":{"self":"https:\/\/jira.billing.ru\/rest\/api\/2\/issuetype\/6","id":"6","description":"Created by JIRA Agile - do not edit or delete. Issue type for a user story.","iconUrl":"https:\/\/jira.billing.ru\/images\/icons\/issuetypes\/genericissue.png","name":"Story","subtask":false}}}},{"id":"675008","self":"https:\/\/jira.billing.ru\/rest\/api\/2\/issueLink\/675008","type":{"id":"10200","name":"Depends","inward":"is depended on by ","outward":"depends on","self":"https:\/\/jira.billing.ru\/rest\/api\/2\/issueLinkType\/10200"},"outwardIssue":{"id":"629043","key":"GFPMO-787","self":"https:\/\/jira.billing.ru\/rest\/api\/2\/issue\/629043","fields":{"summary":"1. KICK-OFF \u043f\u0440\u043e\u0435\u043a\u0442\u0430","status":{"self":"https:\/\/jira.billing.ru\/rest\/api\/2\/status\/6","description":"The issue is considered finished, the resolution is correct. Issues which are closed can be reopened.","iconUrl":"https:\/\/jira.billing.ru\/images\/icons\/statuses\/closed.png","name":"Closed","id":"6","statusCategory":{"self":"https:\/\/jira.billing.ru\/rest\/api\/2\/statuscategory\/3","id":3,"key":"done","colorName":"green","name":"Done"}},"priority":{"self":"https:\/\/jira.billing.ru\/rest\/api\/2\/priority\/3","iconUrl":"https:\/\/jira.billing.ru\/images\/icons\/priorities\/major.png","name":"Major","id":"3"},"issuetype":{"self":"https:\/\/jira.billing.ru\/rest\/api\/2\/issuetype\/6","id":"6","description":"Created by JIRA Agile - do not edit or delete. Issue type for a user story.","iconUrl":"https:\/\/jira.billing.ru\/images\/icons\/issuetypes\/genericissue.png","name":"Story","subtask":false}}}},{"id":"675003","self":"https:\/\/jira.billing.ru\/rest\/api\/2\/issueLink\/675003","type":{"id":"10200","name":"Depends","inward":"is depended on by ","outward":"depends on","self":"https:\/\/jira.billing.ru\/rest\/api\/2\/issueLinkType\/10200"},"outwardIssue":{"id":"629040","key":"GFPMO-785","self":"https:\/\/jira.billing.ru\/rest\/api\/2\/issue\/629040","fields":{"summary":"2. \u0423\u0442\u0432\u0435\u0440\u0436\u0434\u0435\u043d\u0438\u0435 \u0442\u0440\u0435\u0431\u043e\u0432\u0430\u043d\u0438\u0439 \u043a \u0418\u0422\u041e \u0438 \u0432\u044b\u0431\u043e\u0440 \u0441\u0443\u0431\u043f\u043e\u0434\u0440\u044f\u0434\u0447\u0438\u043a\u0430 \u043d\u0430 \u0441\u0442\u043e\u0440\u043e\u043d\u0435 \u041f\u0421","status":{"self":"https:\/\/jira.billing.ru\/rest\/api\/2\/status\/6","description":"The issue is considered finished, the resolution is correct. Issues which are closed can be reopened.","iconUrl":"https:\/\/jira.billing.ru\/images\/icons\/statuses\/closed.png","name":"Closed","id":"6","statusCategory":{"self":"https:\/\/jira.billing.ru\/rest\/api\/2\/statuscategory\/3","id":3,"key":"done","colorName":"green","name":"Done"}},"priority":{"self":"https:\/\/jira.billing.ru\/rest\/api\/2\/priority\/4","iconUrl":"https:\/\/jira.billing.ru\/images\/icons\/priorities\/minor.png","name":"Minor","id":"4"},"issuetype":{"self":"https:\/\/jira.billing.ru\/rest\/api\/2\/issuetype\/6","id":"6","description":"Created by JIRA Agile - do not edit or delete. Issue type for a user story.","iconUrl":"https:\/\/jira.billing.ru\/images\/icons\/issuetypes\/genericissue.png","name":"Story","subtask":false}}}},{"id":"675007","self":"https:\/\/jira.billing.ru\/rest\/api\/2\/issueLink\/675007","type":{"id":"10200","name":"Depends","inward":"is depended on by ","outward":"depends on","self":"https:\/\/jira.billing.ru\/rest\/api\/2\/issueLinkType\/10200"},"outwardIssue":{"id":"629047","key":"GFPMO-788","self":"https:\/\/jira.billing.ru\/rest\/api\/2\/issue\/629047","fields":{"summary":"3. \u041f\u0440\u043e\u0440\u0430\u0431\u043e\u0442\u043a\u0430 Baseline \u0442\u0440\u0435\u0431\u043e\u0432\u0430\u043d\u0438\u0439 E2E \u0411\u041f \u043f\u043e\u043b\u043d\u043e\u0433\u043e \u0416\u0426 BSS ","status":{"self":"https:\/\/jira.billing.ru\/rest\/api\/2\/status\/6","description":"The issue is considered finished, the resolution is correct. Issues which are closed can be reopened.","iconUrl":"https:\/\/jira.billing.ru\/images\/icons\/statuses\/closed.png","name":"Closed","id":"6","statusCategory":{"self":"https:\/\/jira.billing.ru\/rest\/api\/2\/statuscategory\/3","id":3,"key":"done","colorName":"green","name":"Done"}},"priority":{"self":"https:\/\/jira.billing.ru\/rest\/api\/2\/priority\/4","iconUrl":"https:\/\/jira.billing.ru\/images\/icons\/priorities\/minor.png","name":"Minor","id":"4"},"issuetype":{"self":"https:\/\/jira.billing.ru\/rest\/api\/2\/issuetype\/6","id":"6","description":"Created by JIRA Agile - do not edit or delete. Issue type for a user story.","iconUrl":"https:\/\/jira.billing.ru\/images\/icons\/issuetypes\/genericissue.png","name":"Story","subtask":false}}}},{"id":"675001","self":"https:\/\/jira.billing.ru\/rest\/api\/2\/issueLink\/675001","type":{"id":"10200","name":"Depends","inward":"is depended on by ","outward":"depends on","self":"https:\/\/jira.billing.ru\/rest\/api\/2\/issueLinkType\/10200"},"outwardIssue":{"id":"629055","key":"GFPMO-791","self":"https:\/\/jira.billing.ru\/rest\/api\/2\/issue\/629055","fields":{"summary":"6. \u0420\u0435\u0430\u043b\u0438\u0437\u0430\u0446\u0438\u044f BaseLine \u043d\u0430 JIRA ","status":{"self":"https:\/\/jira.billing.ru\/rest\/api\/2\/status\/6","description":"The issue is considered finished, the resolution is correct. Issues which are closed can be reopened.","iconUrl":"https:\/\/jira.billing.ru\/images\/icons\/statuses\/closed.png","name":"Closed","id":"6","statusCategory":{"self":"https:\/\/jira.billing.ru\/rest\/api\/2\/statuscategory\/3","id":3,"key":"done","colorName":"green","name":"Done"}},"priority":{"self":"https:\/\/jira.billing.ru\/rest\/api\/2\/priority\/4","iconUrl":"https:\/\/jira.billing.ru\/images\/icons\/priorities\/minor.png","name":"Minor","id":"4"},"issuetype":{"self":"https:\/\/jira.billing.ru\/rest\/api\/2\/issuetype\/6","id":"6","description":"Created by JIRA Agile - do not edit or delete. Issue type for a user story.","iconUrl":"https:\/\/jira.billing.ru\/images\/icons\/issuetypes\/genericissue.png","name":"Story","subtask":false}}}},{"id":"675000","self":"https:\/\/jira.billing.ru\/rest\/api\/2\/issueLink\/675000","type":{"id":"10200","name":"Depends","inward":"is depended on by ","outward":"depends on","self":"https:\/\/jira.billing.ru\/rest\/api\/2\/issueLinkType\/10200"},"outwardIssue":{"id":"629382","key":"GFPMO-792","self":"https:\/\/jira.billing.ru\/rest\/api\/2\/issue\/629382","fields":{"summary":"7. Prove of concept \u043d\u0430 \u043f\u0440\u0438\u043c\u0435\u0440\u0435 \u043d\u0435\u0442\u0438\u043f\u043e\u0432\u043e\u0439 \u0438\u043d\u0438\u0446\u0438\u0430\u0442\u0438\u0432\u044b \u043d\u0430 \u043f\u0440\u043e\u0442\u043e\u0442\u0438\u043f\u0435 \u0442\u0435\u0441\u0442\u043e\u0432\u043e\u0439 JIRA ","status":{"self":"https:\/\/jira.billing.ru\/rest\/api\/2\/status\/6","description":"The issue is considered finished, the resolution is correct. Issues which are closed can be reopened.","iconUrl":"https:\/\/jira.billing.ru\/images\/icons\/statuses\/closed.png","name":"Closed","id":"6","statusCategory":{"self":"https:\/\/jira.billing.ru\/rest\/api\/2\/statuscategory\/3","id":3,"key":"done","colorName":"green","name":"Done"}},"priority":{"self":"https:\/\/jira.billing.ru\/rest\/api\/2\/priority\/4","iconUrl":"https:\/\/jira.billing.ru\/images\/icons\/priorities\/minor.png","name":"Minor","id":"4"},"issuetype":{"self":"https:\/\/jira.billing.ru\/rest\/api\/2\/issuetype\/6","id":"6","description":"Created by JIRA Agile - do not edit or delete. Issue type for a user story.","iconUrl":"https:\/\/jira.billing.ru\/images\/icons\/issuetypes\/genericissue.png","name":"Story","subtask":false}}}}],
                 * "key":"GFPMO-737"} */
            }
        }


        return ['data' => $data, 'collections' => ['links' => $links], 'now' => date('c')];
    }

}
