<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Handlers\VladyJiraQuest;

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

}
