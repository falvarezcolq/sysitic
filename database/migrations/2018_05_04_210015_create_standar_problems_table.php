<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStandarProblemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('standar_problems', function (Blueprint $table) {
            $table->increments('id');
            $table->string('observacion',300);
            $table->timestamps();
            $table->unsignedInteger('problem_type_id');
            $table->foreign('problem_type_id')->references('id')->on('problem_types');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('standar_problems');
    }
}
