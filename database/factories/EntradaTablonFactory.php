<?php

use Faker\Generator as Faker;

$factory->define(App\EntradaTablon::class, function (Faker $faker) {
    $fichas = App\Ficha::all()->pluck('id')->toArray();
    return [
        'titulo' => $faker->sentence($nbWords = 6, $variableNbWords = true),
        'imagen' => $faker->imageUrl(500,150),
        'contenido' => $faker->text($maxNbChars = 200),
        'contacto' => $faker->text($maxNbChars = 200),
        'ficha_id' => $faker->unique()->randomElement($fichas),
    ];
});
