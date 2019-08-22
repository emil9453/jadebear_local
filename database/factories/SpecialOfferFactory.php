<?php

$factory->define(App\SpecialOffer::class, function (Faker\Generator $faker) {
    return [
        "photo_name" => $faker->name,
        "caption1" => $faker->name,
        "text1" => $faker->name,
        "caption2" => $faker->name,
        "tetxt2" => $faker->name,
    ];
});
