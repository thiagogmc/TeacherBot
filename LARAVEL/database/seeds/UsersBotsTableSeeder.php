<?php

use Illuminate\Database\Seeder;

class UsersBotsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users_bots')->insert(
            [
                [
                    'user_id' => 1,
                    'bot_id' => 1,
                ],
                [
                    'user_id' => 2,
                    'bot_id' => 2,
                ],
                [
                    'user_id' => 3,
                    'bot_id' => 3,
                ],
                [
                    'user_id' => 4,
                    'bot_id' => 4,
                ],
                [
                    'user_id' => 5,
                    'bot_id' => 5,
                ],



                [
                    'user_id' => 1,
                    'bot_id' => 6,
                ],
                [
                    'user_id' => 2,
                    'bot_id' => 7,
                ],
                [
                    'user_id' => 3,
                    'bot_id' => 8,
                ],
                [
                    'user_id' => 4,
                    'bot_id' => 9,
                ],
                [
                    'user_id' => 5,
                    'bot_id' => 10,
                ],



                [
                    'user_id' => 1,
                    'bot_id' => 11,
                ],
                [
                    'user_id' => 2,
                    'bot_id' => 12,
                ],
                [
                    'user_id' => 3,
                    'bot_id' => 13,
                ],
                [
                    'user_id' => 4,
                    'bot_id' => 14,
                ],
                [
                    'user_id' => 5,
                    'bot_id' => 15,
                ],



                [
                    'user_id' => 1,
                    'bot_id' => 16,
                ],
                [
                    'user_id' => 2,
                    'bot_id' => 17,
                ],
                [
                    'user_id' => 3,
                    'bot_id' => 18,
                ],
                [
                    'user_id' => 4,
                    'bot_id' => 19,
                ],
                [
                    'user_id' => 5,
                    'bot_id' => 20,
                ],
            ]
        );
    }
}
