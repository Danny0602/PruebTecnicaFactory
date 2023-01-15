<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class schoolFactoryCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'Factory:school';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Rellenar la base datos con el factory ya creado del modelo School ';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        \App\Models\school::factory(100)->create();

        $this->info('Se han agregado 100 registros nuevos a la tabla de school');
    }
}
