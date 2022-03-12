<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Puesto extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $puesto=[
          ['N_Puesto'=>'CEO'],
          ['N_Puesto'=>'Gerente Financiero'],
          ['N_Puesto'=>'Gerente Comercial'],
          ['N_Puesto'=>'Gerente Administrativo'],
          ['N_Puesto'=>'Gerente de Marketing'],
        ];

          DB::table('puestos')->insert($puesto);
    }
}
