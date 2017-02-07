<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateImgEventHistoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Photos for albums of events
        Schema::create('img_event_history', function (Blueprint $table){
            $table->increments('id');
            $table->string('path',100);
            $table->integer('id_event_history')->unsigned();
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('id_event_history')->references('id')->on('event_history');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('img_event_history');
    }
}
