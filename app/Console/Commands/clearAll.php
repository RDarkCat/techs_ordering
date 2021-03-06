<?php

namespace App\Console\Commands;

use Composer\Composer;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;

class clearAll extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'cl';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        //dump('config:clear');
        Artisan::call('config:clear');
        //dump('cache:clear');
        Artisan::call('cache:clear');
        //dump('route:clear');
        Artisan::call('route:clear');
        //dump('view:clear');
        Artisan::call('view:clear');
        dump('clear:config,cache,route,view');
    }
}
