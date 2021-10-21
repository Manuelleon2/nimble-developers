<?php

use App\Http\Controllers\ErrorController;
use App\Http\Controllers\ModulosController;
use App\Http\Controllers\ProgramadorController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('index');
})->name('inicio');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('errores', [ErrorController::class, 'index'])->name('errores.index');
Route::post('errores', [ErrorController::class, 'store'])->name('errores.store');

Route::get('modulos', [ModulosController::class, 'index'])->name('modulos.index');
Route::post('modulos', [ModulosController::class, 'store'])->name('modulos.store');

Route::get('programadores', [ProgramadorController::class, 'index'])->name('programadores.index');
Route::post('programadores', [ProgramadorController::class, 'store'])->name('programadores.store');
