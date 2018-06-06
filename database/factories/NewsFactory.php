<?php

use Faker\Generator as Faker;

$factory->define(App\News::class, function (Faker $faker) {
    return [
        'title' => 'test',
        'content' => 'This is a test.'
    ];
});
