<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(SubscriptionsTableSeeder::class);
        $this->call(DirectorsTableSeeder::class);
        $this->call(PerformersTableSeeder::class);
        $this->call(GenresTableSeeder::class);
        $this->call(MoviesTableSeeder::class);
    }
}
