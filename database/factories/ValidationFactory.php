<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use Faker\Generator as Faker;
use Mouhamedfd\Generator\SnNameGenerator as SnNmG;
$factory->define(App\Validation::class, function (Faker $faker) {
    return [
        'valide' => $faker->boolean,
        'seances_id' => factory(App\Seance::class),
    ];
});
