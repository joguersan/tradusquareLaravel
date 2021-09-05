<?php

use Faker\Generator as Faker;

$factory->define(App\Plataforma::class, function (Faker $faker) {
    return [
        'nombre' => $faker->jobTitle(),
        'imagen' => $faker->imageUrl(64, 64),
    ];
});

