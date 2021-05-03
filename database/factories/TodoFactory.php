<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Todo;
use Faker\Generator as Faker;

$factory->define(Todo::class, function (Faker $faker) {
    return [
        'description'=> $faker->realText(20), 
        'responsible'=> $faker->name,
         'priority' => $faker->name,
         'complited' => $faker->boolean,
    ];
});
