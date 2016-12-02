<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Flags extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
    Schema::create('flags', function (Blueprint $table) {
     $table->increments('id');
     $table->integer('post_id')->unsigned();
     $table->foreign('post_id')
     ->references('id')->on('posts')
     ->onDelete('cascade')->onUpdate('cascade');
     $table->integer('counter');
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
        Schema::drop('flags');

    }
}
