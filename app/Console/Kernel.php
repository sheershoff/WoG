<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;
use App\Console\Commands\VladyJiraFindLogin;
use App\Console\Commands\VladyJiraGantt;
use App\Console\Commands\VladyJiraClosedBug;
use App\Console\Commands\VladyJiraFieldList;
use App\Console\Commands\VladyJiraEpic;
use App\Console\Commands\QuestAddAll;
use App\Console\Commands\VladyTest;
use App\Console\Commands\VladyJiraPostponeTime;
use App\Console\Commands\VladyJiraPostpone;
use App\Console\Commands\VladyJiratransitionsIssueList;
use App\Console\Commands\VladyJiraTypeLink;
use App\Console\Commands\VladyJiraTrain;
use App\Console\Commands\VladyJiraIssueType;

class Kernel extends ConsoleKernel
{

    /**
     * The Artisan commands provided by your application.
     *
     * @var array
     */
    protected $commands = [
        VladyJiraFindLogin::class,
        VladyJiraGantt::class,
        VladyJiraClosedBug::class,
        VladyJiraFieldList::class,
        VladyJiraTypeLink::class,
        VladyJiraEpic::class,
        QuestAddAll::class,
        VladyTest::class,
        VladyJiraPostpone::class,
        VladyJiraPostponeTime::class,
        VladyJiratransitionsIssueList::class,
        VladyJiraTrain::class,
        VladyJiraIssueType::class,
    ];

    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        $schedule->command('vladyjiraquest:findlogin')
                ->dailyAt('23:10');
        $schedule->command('quest:addall')
                ->dailyAt('23:10');
        $schedule->command('jira:postponetime')
                ->dailyAt('02:10');
        $schedule->command('jira:postpone')
                ->dailyAt('02:20');
        $schedule->command('jira:epic null')
                ->dailyAt('02:30');
//        $schedule->call(function () {
//            DB::table('recent_users')->delete();
//        })->daily();
    }

    /**
     * Register the Closure based commands for the application.
     *
     * @return void
     */
    protected function commands()
    {
        require base_path('routes/console.php');
    }

}
