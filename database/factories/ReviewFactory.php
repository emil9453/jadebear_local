<?php

$factory->define(App\Review::class, function (Faker\Generator $faker) {
    return [
        "text" => $faker->name,
        "name" => $faker->name,
        "company" => $faker->name,
    ];
});
