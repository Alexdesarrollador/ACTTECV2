<?php

use App\Http\Controllers\EmpleadoController;
use App\Http\Controllers\EquipoController;
use App\Http\Controllers\MantenimientoController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::resource('equipos', EquipoController::class);
    
    Route::resource('empleados', EmpleadoController::class);

    Route::resource('mantenimientos', MantenimientoController::class);
});
