<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id('user_id');
            $table->string('fname',20);
            $table->string('lname',20);
            $table->string('username', 30)->unique();
            $table->string('email')->unique();
            $table->integer('role');
            $table->enum('gender',['male', 'female', 'other']);
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password', 10);
           
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
        Schema::dropIfExists('users');
    }
}
