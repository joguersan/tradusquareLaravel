<?php

use Faker\Generator as Faker;

$factory->define(App\Ficha::class, function (Faker $faker) {
    return [
        'nombre' => $faker->streetName(),
        'imagen' => $faker->imageUrl(500,300),
        'ficha' => $faker->text($maxNbChars = 200),
        'sinopsis' => $faker->text($maxNbChars = 200),
        'equipo' => $faker->text($maxNbChars = 200),
        'descarga' => $faker->text($maxNbChars = 200),
        'info_adicional' => $faker->text($maxNbChars = 200),
        'url' => $faker->randomNumber($nbDigits = NULL, $strict = false)
    ];
});
