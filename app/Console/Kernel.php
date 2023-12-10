<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    /**
     * Define the application's command schedule.
     */
    protected function schedule(Schedule $schedule)
    {
        $schedule->command('fetch:saham-api')->everyThirtySeconds();
        $schedule->command('fetch:crypto-api')->everyMinute();
        $schedule->command('fetch:forex-api')->everySixHours();
    }
    /**
     * Register the commands for the application.
     */
    protected function commands(): void
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }

    protected $commands = [
        \App\Console\Commands\SahamApiData::class,
        \App\Console\Commands\ForexApiData::class,
        \App\Console\Commands\CryptoApiData::class,
    ];
}
