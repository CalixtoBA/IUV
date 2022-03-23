<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

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
  public function Consulta(){
    $csucursal = Sucursal::join('tipo_tiendas','sucursals.IdTipoTienda','=','tipo_tiendas.IdTipoTienda')
      ->join('statuses','sucursals.IdStatus','=','statuses.IdStatus')
      ->join('ciudads','sucursals.IdCiudad','=','ciudads.IdCiudad')
      ->join('estados','sucursals.IdEstado','=','estados.IdEstado')
      ->join('pais','sucursals.IdPais','=','pais.IdPais')
      ->select('sucursals.IdSucursal','sucursals.D_calle','sucursals.D_colonia','sucursals.D_cp','sucursals.D_numero',
              'sucursals.EmailTienda','sucursals.NombreTienda','sucursals.TelefonoTienda','sucursals.IdTipoTienda',
              'tipo_tiendas.Tipo','sucursals.IdStatus','statuses.N_Status','sucursals.IdCiudad','ciudads.N_Ciudad',
              'sucursals.IdEstado','estados.N_Estado','sucursals.IdPais','pais.N_Pais')
      ->orderby('sucursals.IdSucursal')
      ->simplePaginate(1);
    return view('sucursalc',compact('csucursal'));
  }
  Public function Sucursales(){
    $Csucursal = TipoTienda::all();
    $Cstatus = Status::all();
    $Cciudad = Ciudad::all();
    $Cestado = Estado::all();
    $Cpais = Pais::all();
    return view('sucursales',compact('Csucursal','Cstatus','Cciudad','Cestado','Cpais'));
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
  public function Asucursal($IdSucursal){
    $asucursal = Sucursal::join('tipo_tiendas','sucursals.IdTipoTienda','=','tipo_tiendas.IdTipoTienda')
      ->join('statuses','sucursals.IdStatus','=','statuses.IdStatus')
      ->join('ciudads','sucursals.IdCiudad','=','ciudads.IdCiudad')
      ->join('estados','sucursals.IdEstado','=','estados.IdEstado')
      ->join('pais','sucursals.IdPais','=','pais.IdPais')
      ->select('sucursals.IdSucursal','sucursals.D_calle','sucursals.D_colonia','sucursals.D_cp','sucursals.D_numero',
              'sucursals.EmailTienda','sucursals.NombreTienda','sucursals.TelefonoTienda','sucursals.IdTipoTienda',
              'tipo_tiendas.Tipo','sucursals.IdStatus','statuses.N_Status','sucursals.IdCiudad','ciudads.N_Ciudad',
              'sucursals.IdEstado','estados.N_Estado','sucursals.IdPais','pais.N_Pais')
      ->where('sucursals.IdSucursal','=',$IdSucursal)
      ->get();
    $Csucursal = TipoTienda::all();
    $Cstatus = Status::all();
    $Cciudad = Ciudad::all();
    $Cestado = Estado::all();
    $Cpais = Pais::all();
    return view('sucursale',compact('asucursal','Csucursal','Cstatus','Cciudad','Cestado','Cpais'));
  }
  Public function Arsucursal(Request $request){
    //return $request->all();
    $asucursal = Sucursal::where('IdSucursal','=',$request->IdSucursal)->first();
    $asucursal->NombreTienda = $request->NombreTienda;
    $asucursal->IdTipoTienda = $request->IdTipoTienda;
    $asucursal->TelefonoTienda = $request->TelefonoTienda;
    $asucursal->EmailTienda = $request->EmailTienda;
    $asucursal->IdEmpleado = $request->IdEmpleado;
    $asucursal->IdStatus = $request->IdStatus;
    $asucursal->D_calle = $request->D_calle;
    $asucursal->D_numero = $request->D_numero;
    $asucursal->D_colonia = $request->D_colonia;
    $asucursal->D_cp = $request->D_cp;
    $asucursal->IdCiudad = $request->IdCiudad;
    $asucursal->IdEstado = $request->IdEstado;
    $asucursal->IdPais = $request->IdPais;
    $asucursal->save();
    return redirect('/sucursalc');
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
