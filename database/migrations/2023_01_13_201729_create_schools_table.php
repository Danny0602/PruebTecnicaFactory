<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    
    /**
     * Crea la tabla schools con los campos que se le indican.
     */
    public function up()
    {
        //MIGRACION Y MAQUETADO DE LA BASE DE DATOS
        Schema::create('schools', function (Blueprint $table) {
            $table->id();
            $table->foreignId('hs_id');
            $table->foreignId('director_id');
            $table->foreignId('mec_id');
            $table->foreignId('country_id');
            $table->foreignId('region_id');
            $table->foreignId('city_id');
            $table->string('name');
            $table->string('postal');
            $table->string('phone');
            $table->string('password');
            $table->string('email');
            $table->string('email2');
            $table->string('website');
            $table->string('fax');
            $table->string('address');
            $table->string('address_short');
            $table->string('latitude');
            $table->string('longitude');
            $table->string('plan_preference');
            $table->decimal('leads',5,0);
            $table->string('business_status');
            $table->decimal('google_user_ratings_total',5,0);
            $table->string('google_rating');
            $table->string('revisor');
            $table->boolean('active');

            $table->timestamps();
        });
    }


    /**
     * The down() function is used to undo the changes made by the up() function
     */
    public function down()
    {
        Schema::dropIfExists('schools');
    }
};
