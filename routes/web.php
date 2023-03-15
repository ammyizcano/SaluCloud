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

/** Controlador Acceso*/
Route::post('/login', [AccesoController::class, 'login'])->name('acceso.login');

Route::post('/logout', [AccesoController::class, 'logout'])->name('acceso.logout');

Route::post('/session/check', [AccesoController::class, 'session_check'])->name('session.check');

/** Controlador Locales*/


/** Controlador Pacientes*/
Route::post('/patients', [PacientesController::class, 'patients'])->name('pacientes');

Route::post('/patients/save', [PacientesController::class, 'patients_save'])->name('pacientes.save');




/** Controlador Facturación*/



/** Controlador Laboratorio */
Route::post('/laboratory/orders', [PacientesController::class, 'laboratory_orders'])->name('laboratory.orders');

Route::post('/laboratory/orders/status', [PacientesController::class, 'laboratory_orders_status'])->name('laboratory.orders.status');

Route::post('/laboratory/orders/status/aggregated', [PacientesController::class, 'laboratory_orders_status_aggregated'])->name('laboratory.orders.status.aggregated');

Route::post('/laboratory/orders/sample/questionnaire', [PacientesController::class, 'laboratory_orders_sample_questionnaire'])->name('laboratory.orders.sample.questionnaire');

Route::post('laboratory/orders/results/pdf', [PacientesController::class, 'laboratory_orders_results_pdf'])->name('laboratory.orders.results.pdf');

Route::post('/laboratory/result/history', [PacientesController::class, 'laboratory_result_history'])->name('laboratory.result.history');

Route::post('/laboratory/orders/sample', [PacientesController::class, 'laboratory_orders_sample'])->name('laboratory.orders.sample');

Route::post('/laboratory/orders/sample/confirm', [PacientesController::class, 'laboratory_orders_sample_confirm'])->name('laboratory.orders.sample.confirm');

Route::post('/laboratory/orders/samples/confirm', [PacientesController::class, 'laboratory_orders_samples_confirm'])->name('laboratory.orders.samples.confirm');

/** Controlador Laboratorio Datos Maestros */

Route::post('/laboratory/test_classes', [PacientesController::class, 'laboratory_test_classes'])->name('laboratory.test.classes');

Route::post('/laboratory/samples', [PacientesController::class, 'laboratory_samples'])->name('laboratory.samples');