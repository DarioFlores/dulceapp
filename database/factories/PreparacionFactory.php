<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Preparacion;
use App\Unidad;
use Faker\Generator as Faker;

$factory->define(Preparacion::class, function (Faker $faker) {
    return [
        'nombre'    => $faker->word,
        'cantidad'  => $faker->randomFloat(3,0,100),
        'precio'    => $faker->randomFloat(2,0,9999),
        'unidad_id' => Unidad::all()->random()->id,
    ];
});
