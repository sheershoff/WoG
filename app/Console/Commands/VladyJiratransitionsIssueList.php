<?php

namespace App\Console\Commands;

class VladyJiratransitionsIssueList extends VladyJiraCommand
{

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'jira:transitions {Issue}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Список переходов доступных для конкретного Issue';

    /**
     * Execute the console command.
     *
     * @return mixed
     *
     *
     */
    public function handle()
    {
        dd($this->jira->transitionsIssue($this->argument('Issue'), NULL));
    }

}
