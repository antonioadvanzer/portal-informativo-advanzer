<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateImgCircularTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Images of circular
        Schema::create('img_circular', function (Blueprint $table){
            $table->increments('id');
            $table->string('path',200);
            $table->integer('id_circular')->unsigned();
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('id_circular')->references('id')->on('circular');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('img_circular');
    }
}
