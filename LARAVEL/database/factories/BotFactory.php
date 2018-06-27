<?php

use Faker\Generator as Faker;
use tb\Bot;

$factory->define(Bot::class, function (Faker $faker) {
    return [
        'name' => 'BOT da ' . $faker->company,
        'token' => $faker->sha256
    ];
});
