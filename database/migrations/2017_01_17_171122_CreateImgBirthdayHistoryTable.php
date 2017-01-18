<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateImgBirthdayHistoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Photos for albums
        Schema::create('img_birthday_history', function (Blueprint $table){
            $table->increments('id');
            $table->string('path',100);
            $table->integer('id_birthday_history')->unsigned();
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('id_birthday_history')->references('id')->on('birthday_history');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('img_birthday_history');
    }
}
