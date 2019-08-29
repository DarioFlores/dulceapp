<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Preparacion;
use App\Producto;
use App\ProductoPreparacion;
use Faker\Generator as Faker;

$factory->define(ProductoPreparacion::class, function (Faker $faker) {
    return [
        'producto_id'    => Producto::all()->random()->id,
        'preparacion_id'    => Preparacion::all()->random()->id,
        'cantidad'    => $faker->randomFloat(3,0,100),
    ];
});
