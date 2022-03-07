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
        Schema::create('Sucursal', function(Blueprint $table){
          $table->bigIncrements('IdSucursal');
          $table->string('D_calle',20);
          $table->string('D_colonia',20);
          $table->integer('D_cp');
          $table->string('D_numero',5);
          $table->string('EmailTienda',20);
          $table->foreignId('IdEmpleado');
          $table->foreignId('IdCiudad');
          $table->foreignId('IdEstado');
          $table->foreignId('IdPais');
          $table->foreignId('IdStatus');
          $table->foreignId('IdTipoTienda');
          $table->string('NombreTienda',20);
          $table->integer('TelefonoTienda');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Sucursal');
    }
};
