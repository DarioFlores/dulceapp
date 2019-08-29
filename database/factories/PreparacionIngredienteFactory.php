<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Ingrediente;
use App\Preparacion;
use App\PreparacionIngrediente;
use Faker\Generator as Faker;

$factory->define(PreparacionIngrediente::class, function (Faker $faker) {
    return [
        'preparacion_id'    => Preparacion::all()->random()->id,
        'ingrediente_id'    => Ingrediente::all()->random()->id,
        'cantidad'    => $faker->randomFloat(3,0,100),
    ];
});
