<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class CleanDatabase extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'laracarte:clean-database';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Permet de nettoyer une base de donnees.';

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
        $this->info("Yeah, that's done !!!");
    }
}
