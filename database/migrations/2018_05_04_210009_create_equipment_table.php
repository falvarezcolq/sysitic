<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEquipmentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('equipment', function (Blueprint $table) {
            $table->increments('id');
            $table->string('cod_itic',10)->unique();
            $table->string('cod_pc',15)->unique();
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
        Schema::drop('equipment');
    }
}
