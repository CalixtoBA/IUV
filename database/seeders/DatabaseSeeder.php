<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(TipoTienda::class);
        $this->call(Ciudad::class);
        $this->call(Estados::class);
        $this->call(Pais::class);
        $this->call(Status::class);
        $this->call(Departamento::class);
        $this->call(Puesto::class);
        $this->call(Empleados::class);
        $this->call(Sucursal::class);
    }
}
