<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateObservationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('observations', function (Blueprint $table) {
            $table->increments('id');
            $table->string('descripcion',300);
            $table->timestamp('fecha_obs');
            $table->unsignedInteger('created_id');
            $table->unsignedInteger('updated_id')->nullable();
            $table->timestamps();
            $table->unsignedInteger('laboratory_id');
            $table->foreign('laboratory_id')->references('id')->on('laboratories');
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
        Schema::drop('observations');
    }
}
