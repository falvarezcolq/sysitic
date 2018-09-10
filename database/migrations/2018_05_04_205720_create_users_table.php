<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id');
            $table->string('cargo', 30);
            $table->string('user', 50)->unique();
            $table->string('password');
            $table->Integer('is_admin')->default(0);
            $table->rememberToken();
            $table->timestamps();
            $table->unsignedInteger('people_id')->unique();
            $table->foreign('people_id')->references('id')->on('people')->onDelete('cascade');;
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('users');
    }
}
