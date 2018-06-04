<?php

use Faker\Generator as Faker;

$factory->define(App\company::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'description' => $faker->description,
    ];
});
