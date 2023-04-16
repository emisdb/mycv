<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Components\DateFormat;

class local extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'local';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Do some local stuff';

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
     * @return int
     */
    public function handle()
    {
        $num = $this->ask('Enter the number:');
            $df = new DateFormat($num);
            echo "Stamp: " . $df->getDateStamp() . "\n";
            echo "Year: " . $df->getYear() . "\n";
            echo "Month: " . $df->getMonth();
            echo "\n";
    }
}
