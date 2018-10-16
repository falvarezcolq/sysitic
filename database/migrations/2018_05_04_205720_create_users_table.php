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
            $table->Integer('active')->default(1);
            $table->unsignedInteger('people_id')->unique();
            $table->unsignedInteger('created_id');
            $table->unsignedInteger('updated_id')->nullable();
            $table->rememberToken();
            $table->timestamps();
            $table->foreign('people_id')->references('id')->on('people');
            $table->foreign('created_id')->references('id')->on('people');
            $table->foreign('updated_id')->references('id')->on('people');
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
