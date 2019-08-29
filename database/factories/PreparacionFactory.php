<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Preparacion;
use Faker\Generator as Faker;

$factory->define(Preparacion::class, function (Faker $faker) {
    return [
        'nombre'    => $faker->word,
        'cantidad'  => $faker->randomFloat(),
        'precio'    => $faker->randomFloat(),
        'unidad_id' => Unidad::all()->random()->id,
    ];
});
