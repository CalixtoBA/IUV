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
          $table->integer('TelefonoE');
          $table->string('EmailE',20);
          $table->string('D_calle',20);
          $table->string('D_numero',5);
          $table->string('D_colonia',20);
          $table->integer('D_cp');
          $table->foreignId('IdCiudad');
          $table->foreignId('IdEstado');
          $table->foreignId('IdPais');
          $table->foreignId('IdDepartamento');
          $table->foreignId('IdPuesto');
          $table->foreignId('IdSucursal')->nullable();
          $table->date('FechaIngreso');
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
        Schema::dropIfExists('empleados');
    }
};
