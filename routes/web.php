<?php

use App\Http\Controllers\AccesoController;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Route::post('/login', [AccesoController::class, 'login'])->name('acceso.login');

Route::post('/patients', [AccesoController::class, ''])->name('acceso.login');
