<?php

use Faker\Generator as Faker;

$factory->define(App\company::class, function (Faker $faker) {
    return [
        'name' => 'test',
        'description' => 'This is a test.'
    ];
});

