<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert(
            [
                [
                    'name' => 'Thiago',
                    'email' => 'thiago@gmail.com',
                    'password' => bcrypt('123456'),
                ],
                [
                    'name' => 'Adrysson',
                    'email' => 'adrysson@gmail.com',
                    'password' => bcrypt('123456'),
                ],
                [
                    'name' => 'Lucas',
                    'email' => 'lucas@gmail.com',
                    'password' => bcrypt('123456'),
                ],
                [
                    'name' => 'Arthur',
                    'email' => 'arthur@gmail.com',
                    'password' => bcrypt('123456'),
                ],
                [
                    'name' => 'Ricardo',
                    'email' => 'ricardo@gmail.com',
                    'password' => bcrypt('123456'),
                ]
            ]
        );
    }
}
