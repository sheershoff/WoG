<?php
namespace App\Console;
use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;
use App\Console\Commands\VladyJiraFindLogin;
use App\Console\Commands\VladyJiraGantt;
use App\Console\Commands\VladyJiraClosedBug;
use App\Console\Commands\VladyJiraFieldList;
use App\Console\Commands\VladyJiraEpic;
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
        VladyJiraEpic::class,
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