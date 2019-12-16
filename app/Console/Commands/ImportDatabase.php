<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use DB;

class ImportDatabase extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'import:database';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'import .sql file for the GYM system';

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
        DB::unprepared(file_get_contents('database/migrations/laravel_gym.sql'));
    }
}
