<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMoviesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('movies', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->unsignedBigInteger('subscription_id');
            $table->unsignedBigInteger('director_id');
            $table->unsignedBigInteger('performer_id');
            $table->unsignedBigInteger('genre_id');

            //外部キー制約の設定
            $table
                ->foreign('subscription_id')
                ->references('id')
                ->on('subscriptions');
            $table
                ->foreign('director_id')
                ->references('id')
                ->on('directors');
            $table
                ->foreign('performer_id')
                ->references('id')
                ->on('performers');
            $table
                ->foreign('genre_id')
                ->references('id')
                ->on('genres');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('movies');
    }
}
