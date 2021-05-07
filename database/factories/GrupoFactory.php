<?php

use Faker\Generator as Faker;

$factory->define(App\Grupo::class, function (Faker $faker) {
    return [
        'nombre' => $faker->unique()->name(),
        'url' => $faker->unique()->url(),
        'web' => $faker->url(),
        'imagen' => $faker->imageUrl(740,300),
        'descripcion' => $faker->text(),
        'correo' => $faker->email()
    ];
});
