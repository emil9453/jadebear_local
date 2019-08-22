<?php

$factory->define(App\Medium::class, function (Faker\Generator $faker) {
    return [
        "caption" => $faker->name,
        "text" => $faker->name,
    ];
});
