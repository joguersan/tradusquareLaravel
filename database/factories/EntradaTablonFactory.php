<?php

use Faker\Generator as Faker;

$factory->define(App\EntradaTablon::class, function (Faker $faker) {
    return [
        'titulo' => $faker->sentence($nbWords = 6, $variableNbWords = true),
        'imagen' => $faker->imageUrl(500,150),
        'contenido' => $faker->text($maxNbChars = 200),
        'contacto' => $faker->safeEmail(),
    ];
});
