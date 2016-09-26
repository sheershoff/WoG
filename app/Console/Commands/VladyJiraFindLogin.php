<?php

namespace App\Console\Commands;

use App\Models\User;
use App\Models\ActionTransaction;

class VladyJiraFindLogin extends VladyJiraCommand
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

    protected function getUserByEmail($user)
    {
        $e = $this->jira->getUserByEmail($user->email);
        if (isset($e) && ($e !== FALSE) && ($e != '')) {
            $user->jira = $e;
            $user->save();
            return $e;
        }
    }

    protected $quest = 12;
    protected $action_Ok = 18; //VladyJiraInit

    protected function questJiraInitComplite()
    {
        $quests = $this->questUsers($this->quest)->join('users', 'user_id', 'users.id')->whereNotNull('jira')->get();
        foreach ($quests as $q) {
            ActionTransaction::newActionTransaction($q->user_id, $this->action_Ok);
        }
        return count($quests);
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
            $bar->advance();
            $this->line($user->email);
            $this->getUserByEmail($user);
        }
        $this->line('Quest:' . $this->questJiraInitComplite());
    }

}
