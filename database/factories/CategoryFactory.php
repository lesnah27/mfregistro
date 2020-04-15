<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\categori;
use App\Category;
use Faker\Generator as Faker;

$factory->define(Category::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'created_at' => $faker->dateTime,
        'updated_at' => $faker->dateTime
    ];
});
