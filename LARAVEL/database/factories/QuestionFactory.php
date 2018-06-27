<?php

use Faker\Generator as Faker;

$factory->define(tb\Question::class, function (Faker $faker) {
    return [
        'bot_id' => function () {
            $count = \tb\Bot::all()->count();
            return rand(1, $count);
        },
        'name' => $faker->word,
        'subject' => 'PHP',
        'statement' => $faker->sentence(3)
    ];
});
