<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\school;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        //MANDAR A LLAMAR EL FACTORY, EJECUTANDO SEEDERS
        \App\Models\school::factory(100)->create();
    }
}
