<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Descartable;
use App\Producto;
use App\ProductoDescartable;
use Faker\Generator as Faker;

$factory->define(ProductoDescartable::class, function (Faker $faker) {
    return [
        'producto_id'    => Producto::all()->random()->id,
        'descartable_id'    => Descartable::all()->random()->id,
    ];
});
