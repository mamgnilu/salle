<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use Faker\Generator as Faker;
use Mouhamedfd\Generator\SnNameGenerator as SnNmG;
$factory->define(App\User::class, function (Faker $faker) {
    return [
        'uuid' => $faker->uuid,
        'nom' => SnNmG::getName(),
        'prenom' => SnNmg::getFirstName(),
        'telephone' =>$faker->phoneNumber,
        'email' => $faker->safeEmail,
        'remember_token' => Str::random(10),
        'ddn' => $faker->dateTime(),
        'adresse' => $faker->word,
        'role' => $faker->boolean,
        'password' => bcrypt('passer'),
    ];
});
