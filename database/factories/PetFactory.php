<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Pet;
use Faker\Generator as Faker;

$factory->define(Pet::class, function (Faker $faker) {
    return [
        'player_id' => rand(1, 50),
        'name' => $faker->name,
        'color' => $faker->colorName,
        'created_at'    => now(),
        'updated_at'    => now()
    ];
});
