<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEquipmentProblemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('equipment_problems', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('equipment_id');
            $table->unsignedInteger('standar_problem_id');
            $table->unsignedInteger('user_id_report');
            $table->timestamp('timereport');
            $table->unsignedInteger('solution_id')->nullable();
            $table->unsignedInteger('user_id_solution')->nullable();
            $table->timestamp('timesolution')->nullable();
            $table->timestamps();
            //$table->softDeletes();

            $table->foreign('equipment_id')->references('id')->on('equipment');
            $table->foreign('standar_problem_id')->references('id')->on('standar_problems');
            $table->foreign('user_id_report')->references('id')->on('users');
            $table->foreign('solution_id')->references('id')->on('solutions');
            $table->foreign('user_id_solution')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('equipment_problems');
    }
}
