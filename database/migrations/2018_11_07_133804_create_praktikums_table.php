<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePraktikumsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('praktikums', function (Blueprint $table) {
            $table->increments('id');
            $table->string('kelas');
            $table->integer('matkul_id')->unsigned();
            $table->integer('dosen_id')->unsigned();
            $table->integer('created_by')->nullable();

            $table->foreign('dosen_id')->references('id')->on('dosens');
            $table->foreign('matkul_id')->references('id')->on('matkuls');
            
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
        Schema::dropIfExists('praktikums');
    }
}
