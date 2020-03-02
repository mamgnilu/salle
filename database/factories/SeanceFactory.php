<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use Faker\Generator as Faker;
use Mouhamedfd\Generator\SnNameGenerator as SnNmG;
$factory->define(App\Seance::class, function (Faker $faker) {
    return [
        'uuid' => $faker->uuid,
        'tauxHoaire' => $faker->randomNumber(),
        'montant' => $faker->randomFloat(),
        'duree' => $faker->dateTime(),
        'activites_id' => factory(App\Activite::class),
    ];
});
