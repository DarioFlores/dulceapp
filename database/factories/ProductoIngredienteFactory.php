<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Ingrediente;
use App\Producto;
use App\ProductoIngrediente;
use Faker\Generator as Faker;

$factory->define(ProductoIngrediente::class, function (Faker $faker) {
    return [
        'producto_id'    => Producto::all()->random()->id,
        'ingrediente_id'    => Ingrediente::all()->random()->id,
        'cantidad'    => $faker->randomFloat(3,0,100),
    ];
});
