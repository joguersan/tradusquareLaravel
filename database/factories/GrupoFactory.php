<?php

use Faker\Generator as Faker;

$factory->define(App\Grupo::class, function (Faker $faker) {
    return [
        'nombre' => $faker->name(),
        'web_externa' => $faker->url(),
        'imagen' => $faker->imageUrl(740,300),
    ];
});
