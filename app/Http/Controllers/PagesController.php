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
use App\Models\Empleado;
use App\Models\Usuario;

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
      ->join('empleados','sucursals.IdEmpleado','=','empleados.IdEmpleado')
      ->select('sucursals.IdSucursal','sucursals.D_calle','sucursals.D_colonia','sucursals.D_cp','sucursals.D_numero',
              'sucursals.EmailTienda','sucursals.NombreTienda','sucursals.TelefonoTienda','sucursals.IdTipoTienda',
              'tipo_tiendas.Tipo','sucursals.IdStatus','statuses.N_Status','sucursals.IdCiudad','ciudads.N_Ciudad',
              'sucursals.IdEstado','estados.N_Estado','sucursals.IdPais','pais.N_Pais','sucursals.IdEmpleado',
              DB::raw("Concat(empleados.NombreE,' ',empleados.A_Paterno,' ',empleados.A_Materno) as Encargado"))
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
    $Cempleado = DB::table('empleados')->select('IdEmpleado',DB::raw("CONCAT(NombreE,' ',A_Paterno,' ',A_Materno) as Encargado"))->get();
    return view('sucursales',compact('Csucursal','Cstatus','Cciudad','Cestado','Cpais','Cempleado'));
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
    return redirect('/sucursalc');
  }
  public function Asucursal($IdSucursal){
    $asucursal = Sucursal::join('tipo_tiendas','sucursals.IdTipoTienda','=','tipo_tiendas.IdTipoTienda')
      ->join('statuses','sucursals.IdStatus','=','statuses.IdStatus')
      ->join('ciudads','sucursals.IdCiudad','=','ciudads.IdCiudad')
      ->join('estados','sucursals.IdEstado','=','estados.IdEstado')
      ->join('pais','sucursals.IdPais','=','pais.IdPais')
      ->join('empleados','sucursals.IdEmpleado','=','empleados.IdEmpleado')
      ->select('sucursals.IdSucursal','sucursals.D_calle','sucursals.D_colonia','sucursals.D_cp','sucursals.D_numero',
              'sucursals.EmailTienda','sucursals.NombreTienda','sucursals.TelefonoTienda','sucursals.IdTipoTienda',
              'tipo_tiendas.Tipo','sucursals.IdStatus','statuses.N_Status','sucursals.IdCiudad','ciudads.N_Ciudad',
              'sucursals.IdEstado','estados.N_Estado','sucursals.IdPais','pais.N_Pais','sucursals.IdEmpleado',
              DB::raw("Concat(empleados.NombreE,' ',empleados.A_Paterno,' ',empleados.A_Materno) as Encargado"))
      ->where('sucursals.IdSucursal','=',$IdSucursal)
      ->get();
    $Csucursal = TipoTienda::all();
    $Cstatus = Status::all();
    $Cciudad = Ciudad::all();
    $Cestado = Estado::all();
    $Cpais = Pais::all();
    $Cempleado = DB::table('empleados')->select('IdEmpleado',DB::raw("CONCAT(NombreE,' ',A_Paterno,' ',A_Materno) as Encargado"))->get();
    return view('sucursale',compact('asucursal','Csucursal','Cstatus','Cciudad','Cestado','Cpais','Cempleado'));
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
  public function Esucursal($IdSucursal){
    $esucursal = Sucursal::join('tipo_tiendas','sucursals.IdTipoTienda','=','tipo_tiendas.IdTipoTienda')
      ->join('statuses','sucursals.IdStatus','=','statuses.IdStatus')
      ->join('ciudads','sucursals.IdCiudad','=','ciudads.IdCiudad')
      ->join('estados','sucursals.IdEstado','=','estados.IdEstado')
      ->join('pais','sucursals.IdPais','=','pais.IdPais')
      ->join('empleados','sucursals.IdEmpleado','=','empleados.IdEmpleado')
      ->select('sucursals.IdSucursal','sucursals.D_calle','sucursals.D_colonia','sucursals.D_cp','sucursals.D_numero',
              'sucursals.EmailTienda','sucursals.NombreTienda','sucursals.TelefonoTienda','sucursals.IdTipoTienda',
              'tipo_tiendas.Tipo','sucursals.IdStatus','statuses.N_Status','sucursals.IdCiudad','ciudads.N_Ciudad',
              'sucursals.IdEstado','estados.N_Estado','sucursals.IdPais','pais.N_Pais','sucursals.IdEmpleado',
              DB::raw("Concat(empleados.NombreE,' ',empleados.A_Paterno,' ',empleados.A_Materno) as Encargado"))
      ->where('sucursals.IdSucursal','=',$IdSucursal)
      ->get();
    return view('sucursald',compact('esucursal'));
  }
  Public function Ersucursal(Request $request){
    //return $request->all();
    $esucursal = Sucursal::where('IdSucursal','=',$request->IdSucursal)->first();
    $esucursal->delete();
    return redirect('/sucursalc');
  }
  public function Cempleados(){
    $ccempleados = Empleado::join('ciudads','empleados.IdCiudad','=','ciudads.IdCiudad')
      ->join('estados','empleados.IdEstado','=','estados.IdEstado')
      ->join('pais','empleados.IdPais','=','pais.IdPais')
      ->join('departamentos','empleados.IdDepartamento','=','departamentos.IdDepartamento')
      ->join('puestos','empleados.IdPuesto','=','puestos.IdPuesto')
      ->join('sucursals','empleados.IdSucursal','=','sucursals.IdSucursal')
      ->join('statuses','empleados.IdStatus','=','statuses.IdStatus')
      ->select('empleados.IdEmpleado','empleados.NombreE','empleados.A_Paterno','empleados.A_Materno','empleados.TelefonoE',
              'empleados.EmailE','empleados.D_calle','empleados.D_numero','empleados.D_colonia','empleados.D_cp',
              'empleados.IdCiudad','ciudads.N_Ciudad','empleados.IdEstado','estados.N_Estado','empleados.IdPais','pais.N_Pais',
              'empleados.IdDepartamento','departamentos.N_Departamento','empleados.IdPuesto','puestos.N_Puesto',
              'empleados.IdSucursal','sucursals.NombreTienda','empleados.FechaIngreso','empleados.IdStatus','statuses.N_Status')
      ->orderby('empleados.IdEmpleado')
      ->simplePaginate(1);
    return view('empleadosc',compact('ccempleados'));
  }
  Public function Empleado(){
    $Cciudad = Ciudad::all();
    $Cestado = Estado::all();
    $Cpais = Pais::all();
    $Cdepartamento = Departamento::all();
    $Cpuesto = Puesto::all();
    $Csucursal = Sucursal::all();
    $Cstatus = Status::all();
    return view('empleados',compact('Cciudad','Cestado','Cpais','Cdepartamento','Cpuesto','Csucursal','Cstatus'));
  }
  Public function Iempleado(Request $Odatos){
    //return $Odatos->all();
    $iempleado = new Empleado;
    $iempleado->NombreE = $Odatos->input('nombre');
    $iempleado->A_Paterno = $Odatos->input('apaterno');
    $iempleado->A_Materno = $Odatos->input('amaterno');
    $iempleado->TelefonoE = $Odatos->input('telefono');
    $iempleado->EmailE = $Odatos->input('correoe');
    $iempleado->D_calle = $Odatos->input('calle');
    $iempleado->D_numero = $Odatos->input('numero');
    $iempleado->D_colonia = $Odatos->input('colonia');
    $iempleado->D_cp = $Odatos->input('cp');
    $iempleado->IdCiudad = $Odatos->input('ciudad');
    $iempleado->IdEstado = $Odatos->input('estado');
    $iempleado->IdPais = $Odatos->input('pais');
    $iempleado->IdDepartamento = $Odatos->input('departamento');
    $iempleado->IdPuesto = $Odatos->input('puesto');
    $iempleado->IdSucursal = $Odatos->input('sucursal');
    $iempleado->FechaIngreso = $Odatos->input('fingreso');
    $iempleado->IdStatus = $Odatos->input('estatus');
    $iempleado->save();
    return redirect('/empleadosc');
  }
  public function Aempleado($IdEmpleado){
    $eempleados = Empleado::join('sucursals','empleados.IdSucursal','=','sucursals.IdSucursal')
      ->join('ciudads','empleados.IdCiudad','=','ciudads.IdCiudad')
      ->join('estados','empleados.IdEstado','=','estados.IdEstado')
      ->join('pais','empleados.IdPais','=','pais.IdPais')
      ->join('departamentos','empleados.IdDepartamento','=','departamentos.IdDepartamento')
      ->join('puestos','empleados.IdPuesto','=','puestos.IdPuesto')
      ->join('statuses','empleados.IdStatus','=','statuses.IdStatus')
      ->select('empleados.IdEmpleado','empleados.NombreE','empleados.A_Paterno','empleados.A_Materno','empleados.TelefonoE',
              'empleados.EmailE','empleados.D_calle','empleados.D_numero','empleados.D_colonia','empleados.D_cp',
              'empleados.IdCiudad','ciudads.N_Ciudad','empleados.IdEstado','estados.N_Estado','empleados.IdPais','pais.N_Pais',
              'empleados.IdDepartamento','departamentos.N_Departamento','empleados.IdPuesto','puestos.N_Puesto',
              'empleados.IdSucursal','sucursals.NombreTienda','empleados.FechaIngreso','empleados.IdStatus','statuses.N_Status')
      ->where('empleados.IdEmpleado','=',$IdEmpleado)
      ->get();
    $Cciudad = Ciudad::all();
    $Cestado = Estado::all();
    $Cpais = Pais::all();
    $Cdepartamento = Departamento::all();
    $Cpuesto = Puesto::all();
    $Csucursal = Sucursal::all();
    $Cstatus = Status::all();
    return view('empleadoe',compact('eempleados','Cciudad','Cestado','Cpais','Cdepartamento','Cpuesto','Csucursal','Cstatus'));
  }
  Public function Arempleado(Request $request){
    //return $request->all();
    $arempleado = Empleado::where('IdEmpleado','=',$request->Identificador)->first();
    $arempleado->NombreE = $request->Nombre;
    $arempleado->A_Paterno = $request->Apaterno;
    $arempleado->A_Materno = $request->Amaterno;
    $arempleado->TelefonoE = $request->Telefono;
    $arempleado->EmailE = $request->Correo;
    $arempleado->D_calle = $request->Calle;
    $arempleado->D_numero = $request->Numero;
    $arempleado->D_colonia = $request->Colonia;
    $arempleado->D_cp = $request->cp;
    $arempleado->IdCiudad = $request->ciudad;
    $arempleado->IdEstado = $request->estado;
    $arempleado->IdPais = $request->pais;
    $arempleado->IdDepartamento = $request->departamento;
    $arempleado->IdPuesto = $request->puesto;
    $arempleado->IdSucursal = $request->sucursal;
    $arempleado->FechaIngreso = $request->fingreso;
    $arempleado->IdStatus = $request->estatus;
    $arempleado->save();
    return redirect('/empleadosc');
  }
  public function Eempleado($IdEmpleado){
    $eempleado = Empleado::join('ciudads','empleados.IdCiudad','=','ciudads.IdCiudad')
      ->join('estados','empleados.IdEstado','=','estados.IdEstado')
      ->join('pais','empleados.IdPais','=','pais.IdPais')
      ->join('departamentos','empleados.IdDepartamento','=','departamentos.IdDepartamento')
      ->join('puestos','empleados.IdPuesto','=','puestos.IdPuesto')
      ->join('sucursals','empleados.IdSucursal','=','sucursals.IdSucursal')
      ->join('statuses','empleados.IdStatus','=','statuses.IdStatus')
      ->select('empleados.IdEmpleado','empleados.NombreE','empleados.A_Paterno','empleados.A_Materno','empleados.TelefonoE',
              'empleados.EmailE','empleados.D_calle','empleados.D_numero','empleados.D_colonia','empleados.D_cp',
              'empleados.IdCiudad','ciudads.N_Ciudad','empleados.IdEstado','estados.N_Estado','empleados.IdPais','pais.N_Pais',
              'empleados.IdDepartamento','departamentos.N_Departamento','empleados.IdPuesto','puestos.N_Puesto',
              'empleados.IdSucursal','sucursals.NombreTienda','empleados.FechaIngreso','empleados.IdStatus','statuses.N_Status')
      ->where('empleados.IdEmpleado','=',$IdEmpleado)
      ->get();
    return view('empleadosd',compact('eempleado'));
  }
  Public function Erempleado(Request $request){
    //return $request->all();
    $erempleado = Empleado::where('IdEmpleado','=',$request->Identificador)->first();
    $erempleado->delete();
    return redirect('/empleadosc');
  }
  public function Cusuario(){
    $cusuario = Usuario::join('empleados','usuarios.IdEmpleado','=','empleados.IdEmpleado')
      ->join('statuses','usuarios.IdStatus','=','statuses.IdStatus')
      ->select('usuarios.IdUsuario',DB::raw("Concat(empleados.NombreE,' ',empleados.A_Paterno,' ',empleados.A_Materno) as Uempleado"),
              'empleados.EmailE','usuarios.Contraseña','usuarios.F_Inicio_S','usuarios.IdStatus','statuses.N_Status')
      ->orderby('usuarios.IdUsuario')
      ->simplePaginate(1);
    return view('usuarioc',compact('cusuario'));
  }
  Public function Usuarios(){
    $cempleado = DB::table('empleados')->select('IdEmpleado',DB::raw("CONCAT(NombreE,' ',A_Paterno,' ',A_Materno) as Empleado"),'EmailE')
                  ->where('IdEmpleado','>',1)
                  ->get();
    return view('usuarios',compact('cempleado'));
  }
  Public function Nusuario($IdEmpleado){
    $cempleado = DB::table('empleados')->select('IdEmpleado',DB::raw("CONCAT(NombreE,' ',A_Paterno,' ',A_Materno) as Empleado"),'EmailE')
                  ->where('IdEmpleado','=',$IdEmpleado)
                  ->get();
    $Cstatus = Status::all();
    return view('usuarion',compact('cempleado','Cstatus'));
  }
  Public function Iusuario(Request $Datos){
    //return $Datos->all();
    $iusuario = new Usuario;
    $iusuario->IdEmpleado = $Datos->input('identificador');
    $iusuario->Contraseña = $Datos->input('contraseña');
    $iusuario->IdStatus = $Datos->input('estatus');
    $iusuario->save();
    return redirect('/usuarioc');
  }
}
