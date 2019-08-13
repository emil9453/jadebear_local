<?php

$factory->define(App\TeamMember::class, function (Faker\Generator $faker) {
    return [
        "position" => $faker->name,
        "name" => $faker->name,
        "surname" => $faker->name,
        "about" => $faker->name,
    ];
});
