<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Http\Controllers\MediaController;

class CleanOldMedia extends Command
{
    protected $signature = 'media:clean-old';
    protected $description = 'Clean old media files that are older than 30 minutes';

    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
    {
        $this->info('Cleaning old media files...');

        $controller = new MediaController();
        $controller->cleanOldMedia();

        $this->info('Old media files cleaned successfully.');
    }
    
}

