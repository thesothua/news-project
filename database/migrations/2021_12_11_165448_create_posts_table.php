<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id('post_id');
            $table->string('title',100)->unique();
            $table->text('description')->unique();
            $table->integer('category')->unsigned();
            $table->foreign('category')->references('category_id')->on('categories');
            $table->date('post_date')->nullable();
            $table->integer('author')->unsigned();
            $table->foreign('author')->references('user_id')->on('users');
            $table->binary('post_image')->nullable();
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
        Schema::dropIfExists('posts');
    }
}
