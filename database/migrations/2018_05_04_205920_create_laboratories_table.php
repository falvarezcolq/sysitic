<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLaboratoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('laboratories', function (Blueprint $table) {
            $table->increments('id');
            $table->string('codigo', 15);
            $table->string('nombre_lab', 50);
            $table->string('ubicacion', 100);
            $table->timestamps();
            $table->unsignedInteger('people_id')->nullable();
            $table->foreign('people_id')->references('id')->on('people');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('laboratories');
    }
}
