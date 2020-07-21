<?php

use Faker\Generator as Faker;

/** @var \Illuminate\Database\Eloquent\Factory $factory */

$factory->define(\App\Models\Info::class, function (Faker $faker) {
    return [
        'product_id' => $faker->numberBetween(-2147483648, 2147483647),
        'description' => $faker->text(50),
        'created_at' => $faker->dateTime,
        'updated_at' => $faker->dateTime,
    ];
});
