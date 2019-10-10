<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class Laravel extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'laravel:command
                            {argument : ini adalah argument wajib di isi}
                            {--o|opsi= : ini adalah opsi}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Laravel basic command';

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
        $this->info('Display this on the screen');
        $this->error('Something went wrong!');
        $this->line('Display this on the screen');

        $this->line(print_r($this->options()) . ' ' . print_r($this->arguments()));

        $this->line($this->option('opsi') . ' ' . $this->argument('argument'));

        $name = $this->ask('What is your name?');
        $password = $this->secret('What is the password?');
        if ($this->confirm('Do you wish to continue?')) {
           $this->line($name . ' ' . $password);
        }
    }
}
