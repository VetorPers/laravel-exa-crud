<?php

namespace Vv\ExaCrud\Commands;

use Illuminate\Console\Command;

class GenController extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'gen:controller';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Generate new controller';

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
        //
    }
}
