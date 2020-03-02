<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use Faker\Generator as Faker;
use Mouhamedfd\Generator\SnNameGenerator as SnNmG;
$factory->define(App\Activite::class, function (Faker $faker) {
    return [
        'uuid' => $faker->uuid,
        'libelle' => $faker->word,
        'description' => $faker->text,
        'nom' => $faker->word,
        'montant' => $faker->randomFloat(),
        'avance' => $faker->randomFloat(),
        'datedebut' => $faker->dateTime(),
        'datefin' => $faker->dateTime(),
        'moniteurs_id' => factory(App\Moniteur::class),
    ];
});
