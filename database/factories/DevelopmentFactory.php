<?php

$factory->define(App\Development::class, function (Faker\Generator $faker) {
    return [
        "caption" => $faker->name,
        "text" => $faker->name,
    ];
});
