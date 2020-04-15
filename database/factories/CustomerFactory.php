<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\customer;
use Faker\Generator as Faker;

$factory->define(App\customer::class, function (Faker $faker) {
    return [
        'category_id' => rand(1,4),
        'name' 	      => $faker->text(10),
        'created_at'  => $faker->dateTime,
        'updated_at'  => $faker->dateTime
    ];
});
