<?php

use App\Http\Controllers\EstaticasController;
use Illuminate\Support\Facades\Route;
use Tabuna\Breadcrumbs\Trail;


Route::get('/', function () {
    return view('welcome');
})->name('welcome')
->breadcrumbs(fn(Trail $trail)=>$trail->push('Inicio',route('welcome')));

Route::get('/empresa',[EstaticasController::class,'empresa'])
    ->name('empresa')
    ->breadcrumbs(fn(Trail $trail)=>
    $trail->parent('welcome')->push('Empresa',route('empresa')));

Route::prefix('servicios')->group(function () {
    Route::get('/diseno-y-produccion-de-equipos-electronicos', [EstaticasController::class,'servicioElectronico'])
    ->name('servicio.electronico')
    ->breadcrumbs(fn(Trail $trail)=>
    $trail->parent('welcome')->push('Diseño y producción de equipos electrónicos',route('servicio.electronico')));

    Route::get('/desarrollo-de-software', [EstaticasController::class,'servicioSoftware'])
    ->name('servicio.software')
    ->breadcrumbs(fn(Trail $trail)=>
    $trail->parent('welcome')->push('Desarrollo de software',route('servicio.software')));

    Route::get('/servicios-en-linea', [EstaticasController::class,'servicioLinea'])
    ->name('servicio.linea')
    ->breadcrumbs(fn(Trail $trail)=>
    $trail->parent('welcome')->push('Servicios en línea',route('servicio.linea')));

    Route::get('/consultoria-informatica',[EstaticasController::class,'servicioConsultoria'])
    ->name('servicio.consultoria')
    ->breadcrumbs(fn(Trail $trail)=>
    $trail->parent('welcome')->push('Consultoría informática',route('servicio.consultoria')));
});


Route::get('/contacto',[EstaticasController::class,'contacto'])
    ->name('contacto')
    ->breadcrumbs(fn(Trail $trail)=>
    $trail->parent('welcome')->push('Contacto',route('contacto'))
);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
