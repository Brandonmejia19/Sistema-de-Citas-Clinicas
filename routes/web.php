<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CitasController;
use App\Http\Controllers\MedicoController;
use App\Http\Controllers\ConsultaController;
use App\Http\Controllers\PacienteController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('inicio');
});
Route::get('/citas', function () {
    return view('citas');
    });

Route::post('guardar', [CitasController::class,'store'])->name('guardar'); 
Route::get('consulta', [CitasController::class,'index'])->name('consulta') ;
Route::get('actualizar{id}', [CitasController::class,'editar'])->name('actualizar');
Route::post('update{cita}', [CitasController::class,'update'])->name('update') ;
Route::delete('eliminar{id}', [CitasController::class,'delete'])->name('eliminar');



Route::get('/consultas', function () {
return view('consultas');
    });
    
Route::post('guardara', [ConsultaController::class,'store'])->name('guardara'); 
Route::get('consultaa', [ConsultaController::class,'index'])->name('consultaa') ;
Route::get('editara{id}', [ConsultaController::class,'editara'])->name('actualizara');
Route::post('consulta{consulta}', [ConsultaController::class,'updatea'])->name('updatea') ;
Route::delete('deletea{id}', [ConsultaController::class,'deletea'])->name('eliminara');
   


Route::get('/medico', function () {
return view('medicos');
});
        
Route::post('guardarm', [MedicoController::class,'store'])->name('guardarm'); 
Route::get('consultam', [MedicoController::class,'index'])->name('consultam') ;
Route::get('actualizarm{id}', [MedicoController::class,'editarm'])->name('actualizarm');
Route::post('updatem{medico}', [MedicoController::class,'updatem'])->name('updatem') ;
Route::delete('eliminarm{id}', [MedicoController::class,'deletem'])->name('eliminarm');



Route::get('/pacientes', function () {
return view('pacientes');
});
            
Route::post('guardarp', [PacienteController::class,'store'])->name('guardarp'); 
Route::get('consultap', [PacienteController::class,'index'])->name('consultap') ;
Route::get('actualizarp{id}', [PacienteController::class,'editarp'])->name('actualizarp');
Route::post('updatep{paciente}', [PacienteController::class,'updatep'])->name('updatep') ;
Route::delete('eliminarp{id}', [PacienteController::class,'deletep'])->name('eliminarp');
    
