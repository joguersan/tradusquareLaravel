<?php

use Faker\Generator as Faker;

$factory->define(App\Ficha::class, function (Faker $faker) {
    return [
        'nombre' => $faker->streetName(),
        'imagen' => $faker->imageUrl(500,300),
        'porcentaje_traduccion' => $faker->randomFloat(2, 0, 100),
        'porcentaje_correccion' => $faker->randomFloat(2, 0, 100),
        'porcentaje_edicion' => $faker->randomFloat(2, 0, 100),
        'porcentaje_betatesting' => $faker->randomFloat(2, 0, 100),
    ];
});
