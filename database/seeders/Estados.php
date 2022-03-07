<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Estados extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $estado=[
        ['N_Estado'=>'Aguascalientes'],
        ['N_Estado'=>'Baja California'],
        ['N_Estado'=>'Baja California Sur'],
        ['N_Estado'=>'Campeche'],
        ['N_Estado'=>'Chiapas'],
        ['N_Estado'=>'Chihuahua'],
        ['N_Estado'=>'Ciudad de México'],
        ['N_Estado'=>'Coahuila'],
        ['N_Estado'=>'Colima'],
        ['N_Estado'=>'Durango'],
      ];

      DB::table('Estados')->insert($estado);
    }
}
