<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Departamento extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $deparment=[
          ['N_Departamento'=>'Financiero'],
          ['N_Departamento'=>'Recursos Humanos'],
          ['N_Departamento'=>'Marketing'],
          ['N_Departamento'=>'Comercial'],
          ['N_Departamento'=>'Compras'],
        ];

        DB::table('Departamento')->insert($deparment);
    }
}
