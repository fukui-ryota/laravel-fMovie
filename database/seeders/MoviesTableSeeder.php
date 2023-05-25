<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Movie;

class MoviesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('Movies')->insert([
        'id' => '1',
        'name' => 'トップガン マーヴェリック',
        'subscription_id' => '1',
        'director_id' => '1',
        'performer_id' => '3',
        'genre_id' => '1'
        ]);

        \DB::table('Movies')->insert([
        'id' => '2',
        'name' => 'ミッション：インポッシブル／フォールアウト',
        'subscription_id' => '1',
        'director_id' => '2',
        'performer_id' => '1',
        'genre_id' => '1'
        ]);

        \DB::table('Movies')->insert([
        'id' => '3',
        'name' => 'ジョン・ウィック',
        'subscription_id' => '1',
        'director_id' => '3',
        'performer_id' => '2',
        'genre_id' => '1'
        ]);
        //
    }
}
