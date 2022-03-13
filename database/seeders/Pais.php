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
        ['N_Pais'=>'Antigua y Barbuda'],
        ['N_Pais'=>'Aruba'],
        ['N_Pais'=>'Bahamas'],
        ['N_Pais'=>'Barbados'],
        ['N_Pais'=>'Cuba'],
        ['N_Pais'=>'Dominica'],
        ['N_Pais'=>'Grenada'],
        ['N_Pais'=>'Guadalupe'],
        ['N_Pais'=>'Haití'],
        ['N_Pais'=>'Islas Caimán'],
      ];

      DB::table('pais')->insert($pais);
    }
}
