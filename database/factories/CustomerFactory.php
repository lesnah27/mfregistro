<?php

use App\Customer;
use Faker\Generator as Faker;

$factory->define(App\Customer::class, function (Faker $faker) {
    return [
        'category_id' => rand(1, 3),
        'name' 	      => 'Cliente ' .$faker->text(50),
        'created_at'  => $faker->dateTime,
        'updated_at'  => $faker->dateTime
    ];
});
