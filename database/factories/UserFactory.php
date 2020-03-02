<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use Faker\Generator as Faker;
use Mouhamedfd\Generator\SnNameGenerator as SnNmG;
$factory->define(App\User::class, function (Faker $faker) {
    return [
        'uuid' => $faker->uuid,
        'nom' => $faker->word,
        'prenom' => $faker->word,
        'telephone' => $faker->word,
        'email' => $faker->safeEmail,
        'remember_token' => Str::random(10),
        'ddn' => $faker->dateTime(),
        'adresse' => $faker->word,
        'role' => $faker->boolean,
        'password' => bcrypt($faker->password),
    ];
});
