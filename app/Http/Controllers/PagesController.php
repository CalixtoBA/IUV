<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TipoTienda;
use App\Models\Status;
use App\Models\Ciudad;
use App\Models\Estado;

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
    return view('sucursales',compact('Csucursal','Cstatus','Cciudad','Cestado'));
  }
  Public function Empleado(){
    $yo='Andres';
    return view('empleados',compact('yo'));
  }
  Public function Usuarios(){
    return view('usuarios');
  }
}
