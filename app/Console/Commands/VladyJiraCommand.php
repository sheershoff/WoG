<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Handlers\VladyJiraQuest;
use App\Models\UserQuest;

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
        $this->jira = new VladyJiraQuest();
    }

    protected $reqLite = [
        "fields" => [
            "summary"
        ],
    ];

    public function questUsers($quest)
    {
        return UserQuest::where('quest_id', $quest)->where('user_quest_status_id', 2);
    }

}
