<?php

namespace App\Console\Commands;

class VladyJiraIssueType extends VladyJiraCommand
{

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'jira:issuetype';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Список типов тасков.';

    /**
     * Execute the console command.
     *
     * @return mixed
     *
     */
    public function handle()
    {

        //табличка с типами связи
        $headers = ["id", "name", "description", "subtask"];
        $issueTypes = $this->jira->issueType();
        $issueTypesFlat = array_map(function ($item) {
            return [$item->id, $item->name, $item->description, $item->subtask];
        }, $issueTypes);
        $this->table($headers, $issueTypesFlat);
    }

}
