<?php

use Faker\Generator as Faker;

$factory->define(tb\Exam::class, function (Faker $faker) {
    return [
        'bot_id' => function () {
            $count = \tb\Bot::all()->count();
            return rand(1, $count);
        },
        'date' => $faker->date(),
        'content' => $faker->paragraph(2, true),
        'score' => $faker->randomFloat(1, 2, 10)
    ];
});
