<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCarruselTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('carrusel', function (Blueprint $table){
            $table->increments('id');
            $table->integer('id_circular')->unsigned();
            $table->integer('id_img_circular')->unsigned();
            $table->integer('location')->unsigned();
            $table->boolean('used')->default(1);
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('id_circular')->references('id')->on('circular');
            $table->foreign('id_img_circular')->references('id')->on('img_circular');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('carrusel');
    }
}
