<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('comments', function (Blueprint $table) {
          $table->increments('id');
          $table->string('name');
          $table->string('email');
          $table->text('comment');
          $table->boolean('approved');
          $table->integer('post_id')->unsigned();
          $table->foreign('post_id')
          ->references('id')
          ->on('posts')
          ->onDelete('cascade');
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
      Schema::dropForeign(['post_id']);
      Schema::drop('comments');

  }
}
