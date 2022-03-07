<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Status extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $status= [
        ['N_Status' => 'Activo',],
        ['N_Status' => 'Inactivo',]
      ];

      DB::table('Status')->insert($status);
    }
}
