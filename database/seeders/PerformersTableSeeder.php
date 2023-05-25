<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Performer;

class PerformersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('Performers')->insert([
        'id' => '1',
        'Performers' => 'トム・クルーズ'
        ]);

        \DB::table('Performers')->insert([
        'id' => '2',
        'Performers' => 'キアヌ・リーヴス'
        ]);
        //
    }
}
