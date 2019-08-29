<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Producto;
use Faker\Generator as Faker;

$factory->define(Producto::class, function (Faker $faker) {
    return [
        'nombre'    => $faker->word,
        'tamanio'    => $faker->randomDigitNotNull,
        'precio'    => $faker->randomFloat(2,0,9999),
        'descripcion'    => $faker->text(),
    ];
});
