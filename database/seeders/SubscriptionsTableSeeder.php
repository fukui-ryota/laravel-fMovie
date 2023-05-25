<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Subscription;

class SubscriptionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('Subscriptions')->insert([
        'id' => '1',
        'Subscriptions' => 'Prime Video'
        ]);
        //
    }
}
