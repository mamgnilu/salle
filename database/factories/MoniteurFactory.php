<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use Faker\Generator as Faker;
use Mouhamedfd\Generator\SnNameGenerator as SnNmG;
$factory->define(App\Moniteur::class, function (Faker $faker) {
    return [
        'uuid' => $faker->uuid,
        'nom' => $faker->word,
        'prenom' => $faker->word,
        'telephone' => $faker->word,
        'adresse' => $faker->word,
    ];
});
