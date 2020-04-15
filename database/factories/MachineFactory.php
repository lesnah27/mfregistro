<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Machine;
use Faker\Generator as Faker;

$factory->define(Machine::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'marca' => $faker->marca,
        'modelo' => $faker->modelo,
        'created_at' => $faker->dateTime,
        'updated_at' => $faker->dateTime
    ];
});
