<?php

use Faker\Generator as Faker;

/** @var \Illuminate\Database\Eloquent\Factory $factory */

$factory->define(\App\Contact::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'message' => $faker->text(16383),
        'created_at' => $faker->dateTime,
        'updated_at' => $faker->dateTime,
    ];
});
