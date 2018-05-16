<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSolutionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('solutions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('descripcion',300);
            $table->string('tipo_solucion',300);
            $table->timestamps();
            $table->unsignedInteger('standar_problem_id');
            $table->unsignedInteger('problem_type_id');
            $table->foreign('standar_problem_id')->references('id')->on('standar_problems');
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
        Schema::drop('solutions');
    }
}
