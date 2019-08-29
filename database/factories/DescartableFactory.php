<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Descartable;
use Faker\Generator as Faker;

$factory->define(Descartable::class, function (Faker $faker) {
    return [
        'nombre'    => $faker->word,
        'precio'    => $faker->randomFloat(2,0,9999),
    ];
});
