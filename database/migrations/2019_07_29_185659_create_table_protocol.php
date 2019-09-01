<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableProtocol extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('protocols', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->string('n_protocol', 50);
            $table->string('theme', 250);
            $table->integer('house_number')->unsigned();
            $table->foreign('house_number')->references('id')->on('houses');
//            $table->string('house_number');
            $table->longText('description');
            $table->string('file', 100);
            $table->timestamps();
        });    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
