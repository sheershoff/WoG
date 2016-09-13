<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Cache;

class VladyJiraGantt extends Command
{

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'jira:ganttclear';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Clear cache from json';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
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
        if (Cache::has('gantt')) {
            $this->line(json_decode(Cache::get('gantt'))->now);
        }
        Cache::forget('gantt');
//        Cache::flush();
    }

}
