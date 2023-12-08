<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MesasController;
use App\Http\Controllers\EmpleadosController;
use App\Http\Controllers\MeserosController;
use App\Http\Controllers\ClientesController;
use App\Http\Controllers\ProveedoresController;
use App\Http\Controllers\IngredientesController;
use App\Http\Controllers\RegistroController;

// Rutas principales
Route::view('/', 'welcome');
Route::view('/pri', 'principal');
Route::view('/platillos', 'platillos');
Route::view('/bebidas', 'bebidas');
Route::view('/reser', 'reservacion');

Route::view('/ms', 'mesas');//´++++++++++++++++++

Route::view('/em', 'empleados');//´++++++++++++++++++

Route::view('/provedor', 'proveedores');//´++++++++++++++++++

Route::view('/cli', 'clientes');//´++++++++++++++++++

Route::view('/ingre', 'ingredientes');//´++++++++++++++++++

Route::view('/gestion1', 'sistema_gestion1');
Route::view('/gestion2', 'sistema_gestion2');
Route::view('/gestion3', 'sistema_gestion3');

// Rutas de Mesas


Route::get('/baja-mesas/{id}',[MesasController::class,'destroy'])->name('mesas.destroy');

Route::get('/mesas', [MesasController::class, 'index'])->name('mesas.index');
Route::get('/mesas/create', [MesasController::class, 'create'])->name('mesas.create');
Route::post('/mesas', [MesasController::class, 'store'])->name('mesas.store');
Route::put('/mesas/{id}',[MesasController::class,'update'])->name('mesas.update');
Route::get('/mesas/{id}/edit',[MesasController::class,'edit'])->name('mesas.edit');
//Route::get('/mesas/{id}', MesasController::class .'show')->name('mesas.show');
Route::get('/mesas/pdf', [MesasController::class, 'pdf'])->name('mesas.pdf');

// Rutas de Empleados
Route::get('/bajaempleados/{id}',[EmpleadosController::class,'destroy'])->name('empleados.destroy');

Route::get('/empleados', [EmpleadosController::class, 'index'])->name('empleados.index');
Route::get('/empleados/create', [EmpleadosController::class, 'create'])->name('empleados.create');
Route::post('/empleados', [EmpleadosController::class, 'store'])->name('empleados.store');

Route::put('/empleados/{id}',[EmpleadosController::class,'update'])->name('empleados.update');
Route::get('/empleados/{id}/edit',[EmpleadosController::class,'edit'])->name('empleados.edit');
Route::get('/empleados/pdf', [EmpleadosController::class, 'pdf'])->name('empleados.pdf');

// Rutas de Clientes
Route::get('/clientes', [ClientesController::class, 'index'])->name('clientes.index');
Route::get('/clientes/create', [ClientesController::class, 'create'])->name('clientes.create');
Route::post('/clientes', [ClientesController::class, 'store'])->name('clientes.store');
Route::get('/bajaclientes/{id}',[ClientesController::class,'destroy'])->name('clientes.destroy');
Route::put('/clientes/{id}',[ClientesController::class,'update'])->name('clientes.update');
Route::get('/clientes/{id}/edit',[ClientesController::class,'edit'])->name('clientes.edit');
Route::get('/clientes/pdf', [ClientesController::class, 'pdf'])->name('clientes.pdf');

// Rutas de Proveedores
Route::get('/proveedores', [ProveedoresController::class, 'index'])->name('proveedores.index');
Route::get('/proveedores/create', [ProveedoresController::class, 'create'])->name('proveedores.create');
Route::post('/proveedores', [ProveedoresController::class, 'store'])->name('proveedores.store');
Route::get('/bajasproveedores/{id}',[ProveedoresController::class,'destroy'])->name('proveedores.destroy');
Route::put('/proveedores/{id}',[ProveedoresController::class,'update'])->name('proveedores.update');
Route::get('/proveedores/{id}/edit',[ProveedoresController::class,'edit'])->name('proveedores.edit');
Route::get('/proveedores/pdf', [ProveedoresController::class, 'pdf'])->name('proveedores.pdf');

// Rutas de Ingredientes
Route::get('/ingredientes', [IngredientesController::class, 'index'])->name('ingredientes.index');
Route::get('/ingredientes/create', [IngredientesController::class, 'create'])->name('ingredientes.create');
Route::post('/ingredientes', [IngredientesController::class, 'store'])->name('ingredientes.store');
Route::get('/ingredientes/{id}',[IngredientesController::class,'destroy'])->name('ingredientes.destroy');
Route::put('/ingredientes/{id}',[IngredientesController::class,'update'])->name('ingredientes.update');
Route::get('/ingredientes/{id}/edit',[IngredientesController::class,'edit'])->name('ingredientes.edit');
Route::get('/ingredientes/pdf', [IngredientesController::class, 'pdf'])->name('ingredientes.pdf');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
