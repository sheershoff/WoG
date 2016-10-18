<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Cache;

/* обновляем кешь для диаграмы гантта */

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
