<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class FlaggedPosts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
    Schema::create('flagged_posts', function (Blueprint $table) {
     $table->increments('id');
     $table->integer('user_id')->unsigned();
     $table->foreign('user_id')
     ->references('id')->on('users')
     ->onDelete('cascade')->onUpdate('cascade');
     $table->integer('post_id')->unsigned();
     $table->foreign('post_id')
     ->references('id')->on('posts')
     ->onDelete('cascade')->onUpdate('cascade');
     $table->integer('flags');
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
        Schema::drop('flagged_posts');
    }
}
