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
        Schema::create('Estados', function(Blueprint $table){
          $table->bigIncrements('IdEstado');
          $table->string('N_Estado',20);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    /**public function down()
    {
        Schema::dropIfExists('Estados');
    }*/
};
