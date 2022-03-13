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
        Schema::create('Departamento', function(Blueprint $table){
          $table->bigIncrements('IdDepartamento');
          $table->string('N_Departamento',20);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    /**public function down()
    {
        Schema::dropIfExists('Departamento');
    }*/
};
