<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Item;
use Faker\Generator as Faker;

$factory->define(Item::class, function (Faker $faker) {
    return [

        'machine_id' 	=> rand(1,2),
        'name' 			=> $faker->text(10),
        'codigo' 		=> $faker->e164PhoneNumber,
        'serial' => $faker->randomNumber(7),
        'description' 	=> $faker->text(200),
        'status'        => rand(0, 2),
        'created_at'    => $faker->dateTime,
        'updated_at'    => $faker->dateTime
      
    ];
});
