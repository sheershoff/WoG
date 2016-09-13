<?php

namespace App\Handlers;

/**
 * Description of jira
 *
 * @author ansible
 */
class Jira
{

    protected $apiurl = '';
    protected $username = '';
    protected $password = '';
    protected $proxy = '';

    public function __construct($apiurl, $username, $password, $proxy = '')
    {
        if (isset($apiurl) && ($apiurl != '')) {
            $this->apiurl = $apiurl;
        }
        if (isset($username) && ($username != '')) {
            $this->username = $username;
        }
        if (isset($password) && ($password != '')) {
            $this->password = $password;
        }
        if (isset($proxy) && ($proxy != '')) {
            $this->proxy = $proxy;
        }

        if (($this->apiurl == '') || ($this->username == '') || ($this->password == '')) {
            throw new Exception('Не заданы реквизиты jira');
        }
    }

    /*
     * Базовый запрос к Jira
     */

    public function getJira($url, $req = FALSE)
    {
        $url = $this->apiurl . $url;
//echo $url;
        $ch = curl_init();
        if (!$ch) {
            return FALSE;
        }
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; .NET CLR 1.1.4322)');
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        if ($this->proxy != '') {
            curl_setopt($ch, CURLOPT_PROXY, $this->proxy);
        }
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
//        curl_setopt($ch, CURLOPT_HEADER, 1);
//        curl_setopt($ch, CURLOPT_HTTPPROXYTUNNEL, 1);
//        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
//curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5000);
//curl_setopt($ch, CURLOPT_TIMEOUT, 5000);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array("Content-Type: application/json", "X-Atlassian-Token: nocheck"));
        curl_setopt($ch, CURLOPT_FAILONERROR, true);
//curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "PUT");
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        if ($req) {
            if (is_array($req)) {
                $req = json_encode($req);
            }
            curl_setopt($ch, CURLOPT_POST, true);
            curl_setopt($ch, CURLOPT_POSTFIELDS, $req); //http_build_query
        }
        curl_setopt($ch, CURLOPT_USERPWD, "$this->username:$this->password");
//curl_setopt($ch, CURLOPT_VERBOSE, true);
        //dd($ch);
        $data = curl_exec($ch);
        // dd($data);
        $httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        $ch_error = curl_error($ch);
        curl_close($ch);
        if ($ch_error) {
            echo "cURL Error: $ch_error";
        }
        if ($httpcode != 200) {
            echo $httpcode;
        }
        return ($httpcode >= 200 && $httpcode < 300) ? $data : false;
    }

    /*
     * Получаем список полей
     */

    public function getJiraField($req)
    {
        $req["maxResults"] = 1;
        if (!array_key_exists('jql', $req)) {
            return "not jql field";
        }
        $data = getJira('search', $req);
        $dataArray = json_decode($data, TRUE);
        $dataIssues = $dataArray["issues"];
        $dataIssue = $dataIssues[0];
        $dataFields = $dataIssue["fields"];
        return array_keys($dataFields);
    }

    /*
     * Выдираем из многоуровневой структуры на первый уровень то что нам нужно
     *  "assignee"=>"emailAddress", "status"=>"name",
     * альтернативно:
     * "assignee", "name"/key или "displayName"
     * "status", "name"
     * Отключаем лишние поля
     * "expand"=>false, "id"=>false, "self"=>false,
     * Выдёргиваем несколько значений из вложенной структуры
     * "progress"=>["progress"=>"progress","progresstotal"=>"total"]
     * Пример использования
      $data = flat_value_array($data, [
      "expand"=>false, "id"=>false, "self"=>false,
      "assignee"=>"emailAddress", "status"=>"name",
      "progress"=>["progress"=>"progress","progresstotal"=>"total"]
      ]);
      $data = flat_value_array($data, [
      "expand"=>false, "self"=>false, "id"=>false,
      "assignee"=>"emailAddress", "status"=>"name",
      "key"=>"id", "duedate"=>"start_date", "customfield_10201"=>"parent", "summary"=>"text",
      "progress"=>["progress"=>"progress"]//,"progresstotal"=>"total"]
      ]);
     *  */

    public function flat_value_array($data, $param)
    {

        function itemWork($key, $value, $param, &$itemadd)
        {
            if (!array_key_exists($key, $param)) {
                $itemadd[$key] = $value;
                return;
            }
            if (!$param[$key]) {
                return;
            }
            if (!is_array($value)) {
                $itemadd[$param[$key]] = $value;
                return;
            }
            if (!is_array($param[$key])) {
                $itemadd[$key] = $value[$param[$key]];
                return;
            }
            foreach ($param[$key] as $pkey => $pvalue) {
                $itemadd[$pkey] = $value[$pvalue];
            }
        }

        if (!isset($param)) {
            return $data;
        }
        foreach ($data as &$item) {
            $itemadd = [];
            foreach ($item as $key => $value) {
                if ($key != "fields") {
                    itemWork($key, $value, $param, $itemadd);
                }
            }
            foreach ($item["fields"] as $key => $value) {
                itemWork($key, $value, $param, $itemadd);
            }
            unset($item["fields"]);
            //var_dump($itemadd);
            $item = $itemadd;
        }
        return $data;
    }

///rest/api/2/issue/
    //";//?os_username=".$login."&os_password=".$password;
    public function getIssues($req)
    {
        //var_dump($req);
        $maxResults = array_key_exists("maxResults", $req) ? $req["maxResults"] : 0;
        $startAt = array_key_exists("startAt", $req) ? $req["startAt"] : 0;
        $json = getJira('search', $req); //.'?jql='.urlencode('project=GFIMPL AND type=Bug AND status!=closed order by created desc')
        $data = json_decode($json, TRUE);
        //echo $data["startAt"].'-'.$data["maxResults"].'('.$data["total"].")\n";
        if (($data["startAt"] + $data["maxResults"] < $data["total"]) &&
                (($maxResults == 0) || ($data["startAt"] + $data["maxResults"] < $maxResults)) &&
                ($data["maxResults"] != 0)
        ) {
            $req["startAt"] = $startAt + $data["maxResults"];
            //echo ".z".count($data["issues"])."key=".$data["issues"][0]["key"]."\n";
            $data = array_merge($data["issues"], getIssues($req));
            //echo ".y".count($data)."key=".$data[0]["key"]."\n";
            return $data;
        } else {
            //echo ".f".count($data["issues"])."key=".$data["issues"][0]["key"]."\n";
            return $data["issues"];
        }
    }

    /**
     * @assert ('vladimir.khonin@mrgafon.ru') == 'vkhonin'
     * @assert ('sjdhgjks@sdfkl.ru') == FALSE
     */
    public function getUserByEmail($email)
    {
        $json = $this->getJira('user/search?username=' . $email); //.'?jql='.urlencode('project=GFIMPL AND type=Bug AND status!=closed order by created desc')
        //https://jira.billing.ru/rest/api/2/user/search?username=vladimir.khonin@megafon.ru
        $data = json_decode($json, FALSE);
        if (count($data) > 0) {
            return $data[0]->key;
        } else {
            return FALSE;
        }
    }

    /*
      $req = [//"jql"=>"project=GFIMPL AND type=Bug AND status!=closed order by created desc",
      "jql"=>'project = GFPMO AND status != closed AND status != resolved AND type = Story ORDER BY due ASC',
      "maxResults"=>2,
      "fields"=>["key",//"assignee",
      "status",
      "summary","description",
      "duedate","progress", //"issuelinks",
      "customfield_10201"//epic
      ],
      //Получено через echo json_encode(getJiraField($req));
      //["issuetype","timespent","project","customfield_11000","fixVersions","customfield_11200",
      //"aggregatetimespent","resolution","customfield_10500","customfield_12206","customfield_12800",
      //"customfield_12205","customfield_10700","customfield_12802","customfield_10701",
      //"customfield_12801","customfield_10702","resolutiondate","workratio","lastViewed",
      //"watches","created","priority","customfield_12202","customfield_12201",
      //"customfield_10300","customfield_11511","customfield_12203","customfield_11900",
      //"aggregatetimeoriginalestimate","timeestimate","versions","issuelinks","assignee",
      //"updated","status","components","timeoriginalestimate","description",
      //"customfield_11100","customfield_13200","customfield_10600","customfield_12304",
      //"customfield_10601","customfield_10206","customfield_10207","aggregatetimeestimate",
      //"customfield_10803","customfield_10804","summary","creator","subtasks","reporter",
      //"aggregateprogress","customfield_10001","customfield_12103","customfield_10200",
      //"customfield_10002","customfield_10201","customfield_10003","customfield_12105",
      //"customfield_10202","customfield_10400","customfield_12104","customfield_12302",
      //"customfield_11600","environment","customfield_11801","customfield_11800","customfield_11803",
      //"customfield_11802","duedate","progress"]
      ];
      //,"startAt":'+$istartAt+',"maxResults":1000,"fields":["key","created","reporter","assignee","summary","status"]}';
     */

    /*
      $req = [//"jql"=>"project=GFIMPL AND type=Bug AND status!=closed order by created desc",
      "jql"=>'project = GFPMO AND ((status != closed AND status != resolved) or updated > -14d) AND type in (Story, Epic) ORDER BY$
      //"maxResults"=>2,
      "fields"=>[
      "key",
      "assignee",
      "priority",
      "issuetype",
      "issuelinks",
      "status",
      "summary","description",
      "duedate","progress",
      "customfield_10201",//epic
      "customfield_14801",//Approved date
      ],
      ];
      $dataI=getIssues($req);
      $data = array_map(
      function ($issue) {
      $datetime1 = date_create($issue["fields"]["customfield_14801"]);
      $datetime2 = date_create($issue["fields"]["duedate"]);
      if ($datetime1 && $datetime2 && $issue["fields"]["customfield_14801"]!='') {
      $interval = date_diff($datetime1, $datetime2, TRUE);
      $d=(int)($interval->format('%a'));
      //echo $issue["fields"]["customfield_14801"].' - '.$issue["fields"]["duedate"].' = '.$interval->format('%a')$
      } else
      $d=0;
      ;
      return [
      'id'=>$issue["key"],//(int)$issue["id"],
      'start_date'=>$issue["fields"]["duedate"],
      'duration'=>$d,
      'priority'=>$issue["fields"]["status"]["name"]=="Closed" ? "Closed" : $issue["fields"]["priority"]["name"],
      'type'=>$issue["fields"]["issuetype"]["name"]=="Story"? "task": "project",
      'progress'=>$issue["fields"]["progress"]["progress"],
      'parent'=>$issue["fields"]["issuetype"]["name"]=="Story" ? $issue["fields"]["customfield_10201"] : $issue["f$
      'open'=>TRUE,
      //'text'=>'',
      'summary'=>$issue["fields"]["summary"],
      'desc'=>$issue["fields"]["description"],
      'text'=>
      $issue["fields"]["issuetype"]["name"]=="Story"?
      $issue["fields"]["description"]:
      $issue["fields"]["summary"],
      ];
      },
      $dataI);
      echo json_encode($links);
      file_put_contents('my.json', json_encode($data));

     */
}
