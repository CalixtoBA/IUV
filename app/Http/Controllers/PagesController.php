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
use App\Models\Sucursal;

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
  Public function Isucursal(Request $request){
    //return $request->all();
    $isucursal = new Sucursal;
    $isucursal->NombreTienda = $request->input('NombreTienda');
    $isucursal->IdTipoTienda = $request->input('IdTipoTienda');
    $isucursal->TelefonoTienda = $request->input('TelefonoTienda');
    $isucursal->EmailTienda = $request->input('EmailTienda');
    $isucursal->IdEmpleado = $request->input('IdEmpleado');
    $isucursal->IdStatus = $request->input('IdStatus');
    $isucursal->D_calle = $request->input('D_calle');
    $isucursal->D_numero = $request->input('D_numero');
    $isucursal->D_colonia = $request->input('D_colonia');
    $isucursal->D_cp = $request->input('D_cp');
    $isucursal->IdCiudad = $request->input('IdCiudad');
    $isucursal->IdEstado = $request->input('IdEstado');
    $isucursal->IdPais = $request->input('IdPais');
    $isucursal->save();
    return back();
  }
}
