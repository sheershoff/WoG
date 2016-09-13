<?php

    require_once '../jira.php';

    $reqEpic = [//"jql"=>"project=GFIMPL AND type=Bug AND status!=closed order by created desc",
        "jql"=>'project in (GFIMPL,"OneBSS PMO") AND status!=closed AND issuetype = Epic and priority=minor ORDER BY assignee',
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
    
    $dataEpic=getIssues($reqEpic);
    $dataEpicKey = implode(",", array_map(function ($issue) {return $issue["key"];}, $dataEpic));
 //   echo $dataEpicKey."\n";

/*    $dataALL = array_map(
                function ($issue) {
                    return [
                        'id'=>$issue["key"],//(int)$issue["id"],
                        'start_date'=>$issue["fields"]["duedate"],
                        'duration'=>$d,
                        'priority'=>$issue["fields"]["status"]["name"]=="Closed" ? "Closed" : $issue["fields"]["priority"]["name"],
                        'type'=>$issue["fields"]["issuetype"]["name"]=="Story"? "task": "project",
                        'progress'=>$issue["fields"]["progress"]["progress"],
                        'parent'=>$issue["fields"]["issuetype"]["name"]=="Story" ? $issue["fields"]["customfield_10201"] : $issue["fields"]["assignee"]["emailAddress"],
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
            $dataEpic);*/
	
	/*
	project in (GFIMPL, "OneBSS PMO") AND resolution = Unresolved AND issuetype = story AND "Epic Link" in (GFIMPL-5996,GFPMO-510,GFPMO-912,GFIMPL-5647,GFIMPL-764,GFIMPL-798,GFIMPL-5646,GFIMPL-1097,GFIMPL-5648,GFPMO-630,GFPMO-509,GFPMO-511,GFPMO-513,GFPMO-507,GFPMO-605,GFPMO-508,GFPMO-1571,GFPMO-94,GFIMPL-4476,GFIMPL-4150,GFPMO-640,GFIMPL-4660,GFIMPL-3437,GFPMO-970,GFPMO-759,GFPMO-1601,GFPMO-541,GFIMPL-4676) ORDER BY "Epic Link", assignee
	*/
	//file_put_contents('F:\aPrg\WoG2\Jira\epic.json', json_encode($dataEpic));
	//var_dump($dataEpic[0]);
	//return;
    $req = [//"jql"=>"project=GFIMPL AND type=Bug AND status!=closed order by created desc",
        "jql"=>'project in (GFIMPL, "OneBSS PMO") AND status!=closed and due<1w AND issuetype = story AND "Epic Link" in ('. $dataEpicKey .') ORDER BY "Epic Link", assignee',
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

    $data=getIssues($req);
	$x='';
	foreach ($dataEpic as $epic) {
		$x.='<h1><a href="'.$epic["fields"]["assignee"]["self"].'"><img src="'.$epic["fields"]["assignee"]["avatarUrls"]["48x48"].'" title="'.$epic["fields"]["assignee"]["emailAddress"].'"></a>'."\n";
		$x.='<a href="https://jira.billing.ru/browse/'.$epic["key"].'">'.$epic["fields"]["summary"].'</a></h1>'."\n";
		$x.='<p>'.$epic["fields"]["description"].'</p>'."\n";
		$x.='<table>'."\n";
		$key=$epic["key"];
		foreach (array_filter($data,function($val) use ($key){return $val["fields"]["customfield_10201"]==$key;}) as $issue) {
			$x.='<tr>'."\n"
				.'<td><img src="'.$issue["fields"]["issuetype"]["iconUrl"].'" title="'.$issue["fields"]["issuetype"]["name"].'">'.'</td>'."\n"
				.'<td><img src="'.$issue["fields"]["priority"]["iconUrl"].'" title="'.$issue["fields"]["priority"]["name"].'">'.'</td>'."\n"
				.'<td><img src="'.$issue["fields"]["assignee"]["avatarUrls"]["16x16"].'" title="'.$issue["fields"]["assignee"]["emailAddress"].'">'.'</td>'."\n"
				.'<td><img src="'.$issue["fields"]["status"]["iconUrl"].'" title="'.$issue["fields"]["status"]["name"].'">'.'</td>'."\n"
				.'<td><a href="https://jira.billing.ru/browse/'.$issue["key"].'">'.$issue["key"].'</a> '.$issue["fields"]["summary"].'</td>'."\n"
				.'<td>'.$issue["fields"]["duedate"].($issue["fields"]["duedate"]==$issue["fields"]["customfield_14801"] ? '':'<-'.$issue["fields"]["customfield_14801"]) .'</td>'."\n"
				.'<td>'.$issue["fields"]["description"].'</td>'."\n"
				.'</tr>'."\n";
		}
		$x.='</table>'."\n";
	}
    file_put_contents('toweek.html', $x);

//    echo json_encode($data);
//    file_put_contents('toweek.json', json_encode($data));


