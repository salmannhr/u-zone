<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;
use App\Console\Commands\CleanOldMedia;
use Illuminate\Support\Facades\Log;

class Kernel extends ConsoleKernel
{
    /**
     * 
     *
     * @var array
     */
    protected $commands = [
        CleanOldMedia::class,
    ];

    /**
     * Tentukan jadwal tugas aplikasi.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        $schedule->command('media:clean-old')->everyFiveMinutes()->withoutOverlapping();
    }

    /**
     * Daftarkan perintah untuk aplikasi.
     *
     * @return void
     */
    protected function commands()
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }
}
