<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class TipoTienda extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tipos= [
          ['Tipo' => 'Sucursal',],
          ['Tipo' => 'Matriz',]
        ];

        DB::table('tipo_tiendas')->insert($tipos);
    }
}
