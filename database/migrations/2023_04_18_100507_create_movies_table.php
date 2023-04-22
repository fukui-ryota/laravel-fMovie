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
            $table->timestamps();

            // カラムを追加する処理
            // stringメソッドでは、引数に指定した値をカラム名として、文字列をセットできるカラムを追加。
            $table->string('name');
            // dateメソッドでは、引数に指定した値をカラム名として、日付をセットできるカラムを追加。
            $table->date('date');
            // stringメソッドでは、引数に指定した値をカラム名として、文字列をセットできるカラムを追加。またnullableメソッドは、NULL値を許可。
            $table->string('img')->nullable();
            // unsignedIntegerでは、引数に指定した値をカラム名として、符号なし整数をセットできるカラムを追加
            $table->unsignedInteger('age');
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
