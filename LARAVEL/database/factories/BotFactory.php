<?php

use Faker\Generator as Faker;
use tb\Bot;

$factory->define(Bot::class, function (Faker $faker) {

    $name = $faker->company;
    return [
        'name' => 'BOT da ' . $name,
        'username' => 'Username do ' . $name,
        'token' => $faker->sha256
    ];
});
