<?php

namespace App\Handlers;

/**
 * Description of VladyJiraQuest
 *
 * @author xvv
 */
class VladyJiraQuest extends Jira
{

    //protected $jira = NULL;
    public function __construct()
    {
        $apiurl = config('wogJiraVlady.apiurl');
        $username = config('wogJiraVlady.username');
        $password = config('wogJiraVlady.password');
        $proxy = config('wogJiraVlady.proxy');
        parent::__construct($apiurl, $username, $password, $proxy);
    }

//    public $jql = [
//        //Закрытые баги в проекте GFimpl за последнюю неделю
//        'VladyJiraClosedBug' => 'project = GFimpl AND issuetype = bug and status=Closed and updated<-1h and updated>-1w and updated>=\'2016-09-11\' ORDER BY key desc',
//        //список эпиков
//        'VladyJiraEpic' => 'project in (GFIMPL,"OneBSS PMO") AND status!=closed AND issuetype = Epic ORDER BY assignee',
//        //postpone
//--        'VladyJiraPostpone' => 'project = GFIMPL AND status=postpone AND "Причина ожидания" != "Исправление ошибки на внешней платформе" ORDER BY assignee',
//--        'VladyJiraPostponeTime' => 'project = GFIMPL AND status = Postpone and ("Date of study resumption" is null or "Date of study resumption"<now())  ORDER BY priority DESC',
//--        'VladyJiraCloseRequestAndResolved' => 'project = GFIMPL AND status in (Resolved, Request) and updatedDate<-7d ORDER BY priority DESC',
//        'VladyJiraEpicIsNull' => 'project = GFIMPL AND status!=closed AND "Epic Link" is EMPTY AND type not in (Sub-task, Epic) ORDER BY priority DESC',
//    ];
//    //минимальный набор полей
//    protected $reqLite = [
//        "fields" => [
//            "summary"
//        ],
//    ];
//
    //project = GFPMO AND resolution = Unresolved AND issuetype = Story and "Epic Link"=GFPMO-512 ORDER BY priority DESC
    //project=GFIMPL AND type=Bug AND status!=closed order by created desc
    //Договорённости о коммуникациях - почта и встречи
    //https://habrahabr.ru/post/309130/
    //о вреде привет
    //https://habrahabr.ru/post/298928/
// ./artisan jira:fields
//  "issuetype" => "Issue Type"
//  "timespent" => "Time Spent"
//  "project" => "Project"
//  "customfield_11000" => "Rank"
//  "customfield_15200" => "Статус теста"
//  "fixVersions" => "Fix Version/s"
//  "customfield_11200" => "Сегмент"
//  "aggregatetimespent" => "Σ Time Spent"
//  "resolution" => "Resolution"
//  "customfield_12206" => "Причина ожидания"
//  "customfield_12800" => "Account"
//  "customfield_12205" => "Start Date"
//  "customfield_10700" => "Группа и подгруппа"
//  "customfield_12802" => "Team"
//  "customfield_10701" => "Классификация требования"
//  "customfield_12801" => "Iteration"
//  "customfield_10702" => "Этап"
//  "resolutiondate" => "Resolved"
//  "workratio" => "Work Ratio"
//  "lastViewed" => "Last Viewed"
//  "watches" => "Watchers"
//  "created" => "Created"
//  "priority" => "Priority"
//  "customfield_12202" => "Возможность настройки"
//  "customfield_12201" => "Группа продуктов"
//  "customfield_10300" => "Release Version History"
//  "customfield_11511" => "Проблема"
//  "customfield_12203" => "Platform type"
//  "customfield_11900" => "Комментарий IT МФ"
//  "aggregatetimeoriginalestimate" => "Σ Original Estimate"
//  "timeestimate" => "Remaining Estimate"
//  "versions" => "Affects Version/s"
//  "issuelinks" => "Linked Issues"
//  "assignee" => "Assignee"
//  "updated" => "Updated"
//  "status" => "Status"
//  "components" => "Component/s"
//  "timeoriginalestimate" => "Original Estimate"
//  "description" => "Description"
//  "customfield_15101" => "Flagged"
//  "customfield_11100" => "RnD labels"
//  "customfield_13200" => "Реализует CLM"
//  "customfield_10600" => "PPM"
//  "customfield_12304" => "Спринт ПР"
//  "customfield_10601" => "CLM"
//  "customfield_10207" => "Epic/Theme"
//  "aggregatetimeestimate" => "Σ Remaining Estimate"
//  "customfield_10803" => "Ожидаемый релиз"
//  "customfield_10804" => "Релиз"
//  "summary" => "Summary"
//  "creator" => "Creator"
//  "subtasks" => "Sub-Tasks"
//  "customfield_12385" => "Date of study resumption"
//  "reporter" => "Reporter"
//  "aggregateprogress" => "Σ Progress"
//  "customfield_10001" => "CC"
//  "customfield_12103" => "Custom ПС"
//  "customfield_10200" => "Sprint"
//  "customfield_10002" => "Developer"
//  "customfield_10201" => "Epic Link"
//  "customfield_10003" => "Tester"
//  "customfield_12105" => "Ответственный КД МФ"
//  "customfield_10202" => "Rank (Obsolete)"
//  "customfield_10400" => "issueFunction"
//  "customfield_12104" => "Ответственный ИТ МФ"
//  "customfield_12302" => "Дата ожидания"
//  "customfield_11600" => "Ответственный от ПС"
//  "environment" => "Environment"
//  "customfield_11801" => "Экспертная классификация с точки зрения реализации требования системах производства ПС"
//  "customfield_11800" => "Причина возникновения требований"
//  "customfield_11803" => "Понимание критичности относительно старта GF"
//  "customfield_11802" => "Описание требования создано инициатором на базе"
//  "duedate" => "Due Date"
//  "progress" => "Progress"
}
