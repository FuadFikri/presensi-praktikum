<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePresensisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('presensis', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('jadwal_id')->unsigned();
            $table->integer('user_id')->unsigned();
            $table->integer('praktikum_id')->unsigned();
            $table->integer('status')->default(0);
            $table->text('feedback')->nullable();
            $table->foreign('jadwal_id')->references('id')->on('jadwals')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('praktikum_id')->references('id')->on('praktikums');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('presensis');
    }
}
