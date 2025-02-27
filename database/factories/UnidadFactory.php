<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Unidad;
use Faker\Generator as Faker;

$factory->define(Unidad::class, function (Faker $faker) {
    return [
        'nombre'    => $faker->word,
        'simbolo'   => $faker->randomLetter,
    ];
});
