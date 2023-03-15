<?php

use App\Http\Controllers\AccesoController;
use App\Http\Controllers\FacturacionController;
use App\Http\Controllers\LocalesController;
use App\Http\Controllers\PacientesController;
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

/** Controlador Acceso*/
Route::post('/login', [AccesoController::class, 'login'])->name('acceso.login');

/** Controlador Locales*/
Route::post('/locales/identifications', [LocalesController::class, 'identifications'])->name('identifications');
Route::post('/locales/phones/country_codes', [LocalesController::class, 'phones_country_codes'])->name('country_codes');

/** Controlador Pacientes*/
Route::post('/patients', [PacientesController::class, 'patients'])->name('pacientes');

Route::post('/patients/save', [PacientesController::class, 'patients_save'])->name('pacientes.save');




/** Controlador Facturación*/
Route::post('/Facturacion/invoices', [FacturacionController::class, 'invoices'])->name('invoices');
Route::post('/Facturacion/invoices', [FacturacionController::class, 'store'])->name('store');
Route::post('/Facturacion/remove', [FacturacionController::class, 'remove'])->name('remove');
Route::post('/Facturacion/cancel', [FacturacionController::class, 'cancel'])->name('cancel');
Route::post('/Facturacion/payment/save', [FacturacionController::class, 'payment_save'])->name('payment.save');
Route::post('/Facturacion/credit_notes', [FacturacionController::class, 'credit_notes'])->name('credit_notes');




/** Controlador Laboratorio */