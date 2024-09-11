<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PerroControllers;
Route::get('/', function () {
    return view('welcome');
});

Route::get('/perros', [PerroControllers::class, 'index'])->name('perros.index');
Route::get('/perros/create', [PerroControllers::class, 'create'])->name('perros.create');
Route::post('/perros', [PerroControllers::class, 'store'])->name('perros.store');
Route::get('/perros/{perro}/edit', [PerroControllers::class, 'edit'])->name('perros.edit');
Route::put('/perros/{perro}', [PerroControllers::class, 'update'])->name('perros.update');
Route::get('/perros/{perro}', [PerroControllers::class, 'show'])->name('perros.show');
Route::delete('/perros/{perro}', [PerroControllers::class, 'destroy'])->name('perros.destroy');
Route::get('/perros/reporte', [PerroControllers::class, 'generarReportePDF'])->name('perros.reporte');