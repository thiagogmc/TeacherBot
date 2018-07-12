<?php

use Faker\Generator as Faker;

$factory->define(tb\Resource::class, function (Faker $faker) {
    return [
        'bot_id' => function () {
            $count = \tb\Bot::all()->count();
            return rand(1, $count);
        },
        'name' => $faker->word,
        'content' => $faker->url
    ];
});
