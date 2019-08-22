<?php

$factory->define(App\Faq::class, function (Faker\Generator $faker) {
    return [
        "caption" => $faker->name,
        "text" => $faker->name,
    ];
});
