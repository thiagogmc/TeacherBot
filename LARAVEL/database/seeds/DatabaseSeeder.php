<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(BotsTableSeeder::class);
        $this->call(UsersBotsTableSeeder::class);
        $this->call(ExamsTableSeeder::class);
        $this->call(ResourcesTableSeeder::class);
        $this->call(QuestionsTableSeeder::class);
    }
}
