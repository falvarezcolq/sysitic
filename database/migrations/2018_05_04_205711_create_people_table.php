<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePeopleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('people', function (Blueprint $table) {
        
            $table->increments('id');
            $table->string('ci', 15);
            $table->string('nombre', 40);
            $table->string('paterno', 20);
            $table->string('materno', 20);
            $table->boolean('genero');
            $table->timestamp('fecha_nac');
            $table->string('email', 50);
            $table->string('telfijo', 15);
            $table->string('telcelular', 15);
            $table->string('direccion', 100);
            $table->string('profesion', 30);
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
        Schema::drop('people');
    }
}
