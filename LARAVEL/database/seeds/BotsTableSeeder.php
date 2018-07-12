<?php

use Illuminate\Database\Seeder;

class BotsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\tb\Bot::class, 20)->create();
    }
}
