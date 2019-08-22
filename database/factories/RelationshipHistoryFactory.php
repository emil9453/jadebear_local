<?php

$factory->define(App\RelationshipHistory::class, function (Faker\Generator $faker) {
    return [
        "year" => $faker->randomNumber(2),
        "caption1" => $faker->name,
        "caption2" => $faker->name,
    ];
});
