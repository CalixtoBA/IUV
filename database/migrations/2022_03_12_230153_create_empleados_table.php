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
        Schema::create('empleados', function (Blueprint $table) {
          $table->bigIncrements('IdEmpleado');
          $table->string('NombreE',20);
          $table->string('A_Paterno',20);
          $table->string('A_Materno',20);
          $table->string('TelefonoE',10)->nullable();
          $table->string('EmailE',20)->nullable();
          $table->string('D_calle',20)->nullable();
          $table->string('D_numero',5)->nullable();
          $table->string('D_colonia',20)->nullable();
          $table->integer('D_cp')->nullable();
          $table->foreignId('IdCiudad')->nullable();
          $table->foreignId('IdEstado')->nullable();
          $table->foreignId('IdPais')->nullable();
          $table->foreignId('IdDepartamento')->nullable();
          $table->foreignId('IdPuesto')->nullable();
          $table->foreignId('IdSucursal')->nullable();
          $table->date('FechaIngreso')->nullable();
          $table->foreignId('IdStatus')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('empleados');
    }
};
