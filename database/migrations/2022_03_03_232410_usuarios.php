<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Usuarios', function(Blueprint $table){
          $table->bigIncrements('IdUsuarios');
          $table->string('login',15);
          $table->foreignId('IdEmpleado');
          $table->string('Contraseña',50);
          $table->date('F_Inicio_S');
          $table->foreignId('IdStatus');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      Schema::dropIfExists('Usuarios');
    }
};
