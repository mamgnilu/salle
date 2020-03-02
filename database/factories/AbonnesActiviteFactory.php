<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use Faker\Generator as Faker;
use Mouhamedfd\Generator\SnNameGenerator as SnNmG;
$factory->define(App\AbonnesActivite::class, function (Faker $faker) {
    return [
        'activites_id' => factory(App\Activite::class),
        'abonnes_id' => factory(App\Abonne::class),
    ];
});
