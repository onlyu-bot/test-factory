<?php

use Faker\Generator as Faker;

/** @var \Illuminate\Database\Eloquent\Factory $factory */

$factory->define(\App\Models\Product::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'price' => $faker->numberBetween(-2147483648, 2147483647),
        'created_at' => $faker->dateTime,
        'updated_at' => $faker->dateTime,
    ];
});
