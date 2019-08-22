<?php

$factory->define(App\Politic::class, function (Faker\Generator $faker) {
    return [
        "caption" => $faker->name,
        "text" => $faker->name,
    ];
});
