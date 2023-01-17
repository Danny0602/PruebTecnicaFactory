<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class schoolFactoryCommand extends Command
{

   /* The name of the command that will be used to call the command. */
    protected $signature = 'Factory:school';


    /* The description of the command that will be shown when you run `php artisan` */
    protected $description = 'Rellenar la base datos con el factory ya creado del modelo School ';


    /**
     * The handle() function is called when the command is executed
     */
    public function handle()
    {
       /* Creating 100 new records in the school table. */
        \App\Models\school::factory(100)->create();

        /* Printing a message to the console. */
        $this->info('Se han agregado 100 registros nuevos a la tabla de school');
    }
}
