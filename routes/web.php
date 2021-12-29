<?php

use App\Http\Controllers\ClienteController;
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

Route::get('/novocliente', [ClienteController::class , 'create'])->name('novocliente');;
Route::post('/clientes', [ClienteController::class , 'store'])->name('clientes');;
Route::get('/', [ClienteController::class , 'index']);
Route::get('/editacliente/{id}', [ClienteController::class , 'index'])->name('editacliente');
Route::get('/deletecliente/{id}', [ClienteController::class , 'index'])-> name('deletecliente');
