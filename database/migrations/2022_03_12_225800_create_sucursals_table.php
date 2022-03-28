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
        Schema::create('sucursals', function (Blueprint $table) {
          $table->bigIncrements('IdSucursal');
          $table->string('D_calle',20)->nullable();
          $table->string('D_colonia',20)->nullable();
          $table->integer('D_cp')->nullable();
          $table->string('D_numero',5)->nullable();
          $table->string('EmailTienda',20)->nullable();
          $table->foreignId('IdEmpleado')->nullable();
          $table->foreignId('IdCiudad')->nullable();
          $table->foreignId('IdEstado')->nullable();
          $table->foreignId('IdPais')->nullable();
          $table->foreignId('IdStatus')->nullable();
          $table->foreignId('IdTipoTienda')->nullable();
          $table->string('NombreTienda',30);
          $table->string('TelefonoTienda',10)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sucursals');
    }
};
