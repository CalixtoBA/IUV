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
      Schema::table('sucursals', function (Blueprint $table) {
        $table->foreign('IdEmpleado')->references('IdEmpleado')->on('empleados');
        $table->foreign('IdCiudad')->references('IdCiudad')->on('ciudads');
        $table->foreign('IdEstado')->references('IdEstado')->on('estados');
        $table->foreign('IdPais')->references('IdPais')->on('pais');
        $table->foreign('IdStatus')->references('IdStatus')->on('statuses');
        $table->foreign('IdTipoTienda')->references('IdTipoTienda')->on('tipo_tiendas');
      });

      Schema::table('empleados', function (Blueprint $table){
        $table->foreign('IdCiudad')->references('IdCiudad')->on('ciudads');
        $table->foreign('IdEstado')->references('IdEstado')->on('estados');
        $table->foreign('IdPais')->references('IdPais')->on('pais');
        $table->foreign('IdDepartamento')->references('IdDepartamento')->on('departamentos');
        $table->foreign('IdPuesto')->references('IdPuesto')->on('puestos');
        $table->foreign('IdSucursal')->references('IdSucursal')->on('sucursals');
        $table->foreign('IdStatus')->references('IdStatus')->on('statuses');
      });

      Schema::table('usuarios', function(Blueprint $table){
          $table->foreign('IdEmpleado')->references('IdEmpleado')->on('empleados');
          $table->foreign('IdStatus')->references('IdStatus')->on('statuses');
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('llavefs');
    }
};
