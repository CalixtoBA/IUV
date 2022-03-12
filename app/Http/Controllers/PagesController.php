<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TipoTienda;
use App\Models\Status;
use App\Models\Ciudad;
use App\Models\Estado;
use App\Models\Pais;
use App\Models\Departamento;
use App\Models\Puesto;

class PagesController extends Controller
{
  public function Inicio(){
    return view('welcome');
  }
  public function Login(){
    return view('login');
  }
  public function Menu(){
    return view('menu');
  }
  Public function Sucursales(){
    $Csucursal = TipoTienda::all();
    $Cstatus = Status::all();
    $Cciudad = Ciudad::all();
    $Cestado = Estado::all();
    $Cpais = Pais::all();
    return view('sucursales',compact('Csucursal','Cstatus','Cciudad','Cestado','Cpais'));
  }
  Public function Empleado(){
    $Cciudad = Ciudad::all();
    $Cestado = Estado::all();
    $Cpais = Pais::all();
    $Cdepartamento = Departamento::all();
    $Cpuesto = Puesto::all();
    $Cstatus = Status::all();
    return view('empleados',compact('Cciudad','Cestado','Cpais','Cdepartamento','Cpuesto','Cstatus'));
  }
  Public function Usuarios(){
    $Cstatus = Status::all();
    return view('usuarios',compact('Cstatus'));
  }
}
