<?php

$factory->define(App\WhyExactlyWe::class, function (Faker\Generator $faker) {
    return [
        "caption" => $faker->name,
        "text" => $faker->name,
    ];
});
