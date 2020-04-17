<?php

use Faker\Generator as Faker;

$factory->define(App\Comentario::class, function (Faker $faker) {
    return [
        'contenido' => $faker->text($maxNbChars = 200),
        'noticia_id' => $faker->numberBetween($min = 1, $max = 10),
        'fecha' => $faker->date($format = 'Y-m-d', $max = 'now'),
    ];
});
