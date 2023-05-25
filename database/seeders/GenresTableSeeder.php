<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Genre;

class GenresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('Genres')->insert([
        'id' => '1',
        'Genres' => 'アクション'
        ]);
        //
    }
}
