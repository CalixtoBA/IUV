<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Pais extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $pais=[
        ['N_Pais'=>'Aguascalientes'],
        ['N_Pais'=>'Baja California'],
        ['N_Pais'=>'Baja California Sur'],
        ['N_Pais'=>'Campeche'],
        ['N_Pais'=>'Chiapas'],
        ['N_Pais'=>'Chihuahua'],
        ['N_Pais'=>'Ciudad de México'],
        ['N_Pais'=>'Coahuila'],
        ['N_Pais'=>'Colima'],
        ['N_Pais'=>'Durango'],
      ];

      DB::table('Pais')->insert($pais);
    }
}
