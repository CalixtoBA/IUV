<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Ciudad extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $ciudades=[
          ['N_Ciudad'=>'Acapulco'],
          ['N_Ciudad'=>'Aguascalientes'],
          ['N_Ciudad'=>'Campeche'],
          ['N_Ciudad'=>'Cancún'],
          ['N_Ciudad'=>'Celaya'],
          ['N_Ciudad'=>'Chetumal'],
          ['N_Ciudad'=>'Chihuahua'],
          ['N_Ciudad'=>'Chilpancingo'],
          ['N_Ciudad'=>'Ciudad del Carmen'],
          ['N_Ciudad'=>'Ciudad Obregón'],
        ];

        DB::table('Ciudad')->insert($ciudades);
    }
}
