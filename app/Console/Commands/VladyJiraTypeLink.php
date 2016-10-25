<?php

namespace App\Console\Commands;

class VladyJiraTypeLink extends VladyJiraCommand
{

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'jira:typelink';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Список типов ликов.';

    /**
     * Execute the console command.
     *
     * @return mixed
     *
     */
    public function handle()
    {

        //табличка с типами связи
        $headers = ["id", "name", "inward", "outward"];

        $issueLinkTypes = $this->jira->issueLinkType();
        $issueLinkTypesFlat = array_map(function ($item) {
            return [$item->id, $item->name, $item->inward, $item->outward];
        }, $issueLinkTypes);
        $this->table($headers, $issueLinkTypesFlat);
    }

}
