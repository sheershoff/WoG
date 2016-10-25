<?php

namespace App\Console\Commands;

use App\Handlers\VladyJiraQuest;
use App\Models\UserQuest;
use Illuminate\Console\Command;

/*
 * базовый класc для консольных команд использующих jira
 */

class VladyJiraCommand extends Command
{

    protected $jira = null;

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
        $this->jira = new VladyJiraQuest(); //инициированна с параметрами из конфига
    }

    //Список пользователей? для которых открыт $quest
    public function questUsers($quest)
    {
        return UserQuest::where('quest_id', $quest)->where('user_quest_status_id', 2);
    }

}
