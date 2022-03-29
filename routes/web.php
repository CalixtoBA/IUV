<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use Illuminate\Pagination\Paginator;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [PagesController::class, 'Inicio']);
Route::get('login',[PagesController::class,'Login']);
Route::get('menu',[PagesController::class,'Menu']);
Route::get('sucursalc',[PagesController::class,'Consulta']);
Route::get('sucursales',[PagesController::class,'Sucursales']);
Route::post('sucursales',[PagesController::class,'Isucursal'])->name('sucursal.crear');
Route::get('/sucursale/{IdSucursal}',[PagesController::class,'Asucursal'])->name('sucursal.actualizar');
Route::PUT('/sucursale',[PagesController::class,'Arsucursal'])->name('sucursal.actualizarr');
Route::get('/sucursald/{IdSucursal}',[PagesController::class,'Esucursal'])->name('sucursal.eliminar');
Route::PUT('/sucursald',[PagesController::class,'Ersucursal'])->name('sucursal.eliminarr');
Route::get('empleadosc',[PagesController::class,'Cempleados']);
Route::get('empleados',[PagesController::class,'Empleado']);
Route::post('empleados',[PagesController::class,'Iempleado'])->name('empleado.crear');
Route::get('empleadoe/{IdEmpleado}',[PagesController::class,'Aempleado'])->name('empleado.actualizar');
Route::PUT('/empleadoe',[PagesController::class,'Arempleado'])->name('empleado.actualizarr');
Route::get('empleadosd/{IdEmpleado}',[PagesController::class, 'Eempleado'])->name('empleado.eliminar');
Route::PUT('/empleadosd',[PagesController::class,'Erempleado'])->name('empleado.eliminarr');
Route::get('usuarioc',[PagesController::class,'Cusuario']);
Route::get('usuarios',[PagesController::class,'Usuarios']);
Route::get('usuarion/{IdEmpleado}',[PagesController::class,'Nusuario'])->name('usuario.nuevo');
Route::post('usuarion',[PagesController::class,'Iusuario'])->name('usuario.insertar');
