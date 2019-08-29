<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Producto;
use Faker\Generator as Faker;

$factory->define(Producto::class, function (Faker $faker) {
    return [
        'nombre'    => $faker->word,
        'cantidad'    => $faker->randomDigitNotNull,
        'precio'    => $faker->randomFloat(),
        'descripcion'    => $faker->text(),
    ];
});
