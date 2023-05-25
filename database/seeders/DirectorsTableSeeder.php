<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Director;

class DirectorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('Directors')->insert([
        'id' => '1',
        'Directors' => 'ジョセフ・コシンスキー'
        ]);

        \DB::table('Directors')->insert([
        'id' => '2',
        'Directors' => 'クリストファー・マッカリー'
        ]);

        \DB::table('Directors')->insert([
        'id' => '3',
        'Directors' => 'チャド・スタエルスキ'
        ]);
        //
    }
}
