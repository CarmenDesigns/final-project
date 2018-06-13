<?php

use Faker\Generator as Faker;

$factory->define(App\company::class, function (Faker $faker) {
    return [
        'name' => 'Company name',
        'description' => 'Using these sectioning elements also has the benefit of making developers think more about the structure of their web pages. Selecting which element to use for a piece of content isn’t always obvious, but it raises important questions about the purpose of that content, and whether it belongs on the page at all. This is an example of where web standards are not only helping to improve the quality of our markup, but the quality of our web pages as a whole.'
    ];
});

