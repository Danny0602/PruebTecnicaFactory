<?php

namespace Database\Factories;

use App\Models\school;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Eloquent\Factories\Factory;

class schoolFactory extends Factory
{



    protected $model  = school::class;


    public function definition()
    {
        //DIRECCION GENERADA
        $address = $this->faker->address ;
        //DIRECCION RECORTADA DE LA PRINCIPAL
        $address_short = Str::words($address, 2 );

        //NOMBRE GENERADO
        $name = $this->faker->name ;

        //NOMBRE AJUSTADO PARA CREACION DE E-MAIL PERSONALIZADO
        $name_short = str_replace( '.','_',Str::words( $name, 3));


        $rating_decimal = $this->faker->randomElement([2,3,4,5]);

        if($rating_decimal < 5){
           $ratingFinal = $rating_decimal. '.' . $this->faker->randomDigitNot(0);
        }else{
            $ratingFinal = $rating_decimal;
        }

        return [
        'hs_id' => fake()->numerify('66########'),
        'director_id' => $this->faker->randomDigitNot(0),
        'mec_id'=> fake()->numerify('28000###')  ,
        'country_id'=> $this->faker->randomElement([1,2,3,4,5,6,7,8,9,10]) ,
        'region_id'=>$this->faker->randomElement([1,2,3,4,5,6,7,8,9,10,11,12,13,14]),
        'city_id'=> fake()->numerify('68##')  ,
        'name'=> $name,
        'postal'=> fake()->numerify('28###'),
        'phone'=> fake()->numerify('98########') ,
        'password'=> Hash::make('password'),
        //union de nombre recortado y un string de correo
        'email'=>  str_replace(' ','',$name_short) . $this->faker->randomElement(['@gmail.com','@yahoo.com','@hotmail.com','@outlook.com']),
        'email2'=> $this->faker->unique()->safeEmail ,
        'website'=> $this->faker->url ,
        'fax'=> fake()->numerify('91#######'),
        'address'=> $address,
        'address_short'=> $address_short ,
        'latitude'=> $this->faker->latitude($min = 38, $max = 41 ) ,
        'longitude'=> $this->faker->longitude($min = -4, $max = 2)  ,
        'plan_preference'=> $this->faker->randomElement(['anual','mensual','trimestral']) ,
        'leads'=> $this->faker->numberBetween($min = 0, $max = 50) ,
        'business_status'=> $this->faker->randomElement(['OPERATIONAL','CLOSED_PERMANENTLY']) ,
        'google_user_ratings_total' => $this->faker->numberBetween($min = 5, $max = 40)  ,

        'google_rating'=> $ratingFinal,
        'revisor'=> $this->faker->randomElement(['Gabriela Guardado','Daniel Adame','Alejandro Molar','Binbin Ji Huang','Irene Sanchez']) ,
        'active'=> $this->faker->boolean ,
        ];
    }
}
