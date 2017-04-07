<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCircularTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //Create table to save news and other things
        Schema::create('circular', function (Blueprint $table){
            $table->increments('id');
            $table->string('title',300);
            $table->string('summary',600);
            $table->string('content',10000);
            $table->date('date');
            $table->integer('type')->unsigned();
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('type')->references('id')->on('type_circular');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropifExists('circular');
    }
}
