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


        /* Creating 100 registers in the database. */
        /* Creación de 100 registros en la base de datos. */
        \App\Models\school::factory(100)->create();
    }
}
