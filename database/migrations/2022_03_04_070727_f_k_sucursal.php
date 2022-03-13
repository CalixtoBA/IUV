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
     /**public function up()
    {
      Schema::table('Sucursal', function (Blueprint $table) {
        $table->foreign('IdEmpleado')->references('IdEmpleado')->on('Empleados');
        $table->foreign('IdCiudad')->references('IdCiudad')->on('Ciudad');
        $table->foreign('IdEstado')->references('IdEstado')->on('Estados');
        $table->foreign('IdPais')->references('IdPais')->on('Pais');
        $table->foreign('IdStatus')->references('IdStatus')->on('Status');
        $table->foreign('IdTipoTienda')->references('IdTipoTienda')->on('TipoTienda');
      });

      Schema::table('Empleados', function (Blueprint $table){
        $table->foreign('IdCiudad')->references('IdCiudad')->on('Ciudad');
        $table->foreign('IdEstado')->references('IdEstado')->on('Estados');
        $table->foreign('IdPais')->references('IdPais')->on('Pais');
        $table->foreign('IdDepartamento')->references('IdDepartamento')->on('Departamento');
        $table->foreign('IdPuesto')->references('IdPuesto')->on('Puesto');
        $table->foreign('IdSucursal')->references('IdSucursal')->on('Sucursal');
        $table->foreign('IdStatus')->references('IdStatus')->on('Status');
      });

      Schema::table('Usuarios', function(Blueprint $table){
          $table->foreign('IdEmpleado')->references('IdEmpleado')->on('Empleados');
          $table->foreign('IdStatus')->references('IdStatus')->on('Status');
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
