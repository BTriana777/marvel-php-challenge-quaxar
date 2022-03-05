<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Informations;
use Faker\Generator as Faker;
use Illuminate\Support\Str;


$factory->define(Informations::class, function (Faker $faker) {
    return [
        'cities' => $faker->city,
        'countries' => $faker->state
    ];
});
