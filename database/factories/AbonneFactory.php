<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use Faker\Generator as Faker;
use Mouhamedfd\Generator\SnNameGenerator as SnNmG;
$factory->define(App\Abonne::class, function (Faker $faker) {
    return [
        'uuid' => $faker->uuid,
        'motivation' => $faker->word,
        'users_id' => factory(App\User::class),
    ];
});
