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
//Route::PUT('/sucursale/{IdSucursal}',[PagesController::class,'Arsucursal'])->name('sucursal.actualizarr');
Route::get('empleados',[PagesController::class,'Empleado']);
Route::get('usuarios',[PagesController::class,'Usuarios']);
//Route::put('sucursale',[PagesController::class,'Aasucursal'])->name('sucursal.actualizarr');
