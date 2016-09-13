<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Handlers\VladyJiraQuest;
use App\Models\User;

class VladyJiraFindLogin extends Command
{

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'quest:vladyjirafindlogin';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Find and add jira login by email';
    protected $jira = null;

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
        $this->jira = new VladyJiraQuest();
    }

    protected function getUserByEmail($user)
    {
        $e = $this->jira->getUserByEmail($user->email);
        if (isset($e) && ($e !== FALSE) && ($e != '')) {
            $user->jira = $e;
            $user->save();
            return $e;
        }
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
        $users = User::/* where('jira', '=', '') -> */whereNull('jira')->whereNotNull('email')->get();
        $bar = $this->output->createProgressBar(count($users));
        foreach ($users as $user) {
            $this->line($user->email);
            $this->getUserByEmail($user);
            $bar->advance();
        }
    }

}
