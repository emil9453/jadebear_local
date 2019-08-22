<?php

$factory->define(App\WorkSchema::class, function (Faker\Generator $faker) {
    return [
        "text" => $faker->name,
    ];
});
