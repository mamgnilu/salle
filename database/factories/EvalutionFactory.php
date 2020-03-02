<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use Faker\Generator as Faker;
use Mouhamedfd\Generator\SnNameGenerator as SnNmG;
$factory->define(App\Evalution::class, function (Faker $faker) {
    return [
        'uuid' => $faker->uuid,
        'tension_systolique' => $faker->randomFloat(),
        'tension_diastolique' => $faker->randomFloat(),
        'rythme_cardiaque' => $faker->randomNumber(),
        'poids' => $faker->word,
        'etat_tension' => $faker->word,
        'taille' => $faker->word,
        'abonnes_id' => factory(App\Abonne::class),
    ];
});
