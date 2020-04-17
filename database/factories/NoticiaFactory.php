<?php

use Faker\Generator as Faker;

$factory->define(App\Noticia::class, function (Faker $faker) {
    return [
        'titulo' => $faker->words($nb = 5, $variableNbWords = true),
        'contenido' => $faker->text($maxNbChars = 200),
        'imagen' => $faker->imageUrl(600,300),
        'estado' => "Borrador"
    ];
});
