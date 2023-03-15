<?php

use App\Http\Controllers\AccesoController;
use App\Http\Controllers\FacturacionController;
use App\Http\Controllers\LaboratorioController;
use App\Http\Controllers\LocalesController;
use App\Http\Controllers\PacientesController;
use App\Http\Controllers\WebhooksController;
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
Route::post('/locales/identifications', [LocalesController::class, 'identifications'])->name('identifications');
Route::post('/locales/phones/country_codes', [LocalesController::class, 'phones_country_codes'])->name('country_codes');

/** Controlador Pacientes*/
Route::post('/patients', [PacientesController::class, 'patients'])->name('pacientes');

Route::post('/patients/save', [PacientesController::class, 'patients_save'])->name('pacientes.save');



/** Controlador Facturación*/
Route::post('/Facturacion/invoices', [FacturacionController::class, 'invoices'])->name('invoices');
Route::post('/Facturacion/invoices/store', [FacturacionController::class, 'store'])->name('invoices.store');
Route::post('/Facturacion/invoices/remove', [FacturacionController::class, 'remove'])->name('invoices.remove');
Route::post('/Facturacion/invoices/cancel', [FacturacionController::class, 'cancel'])->name('invoices.cancel');
Route::post('/Facturacion/payment/save', [FacturacionController::class, 'payment_save'])->name('payment.save');
Route::post('/Facturacion/credit_notes', [FacturacionController::class, 'credit_notes'])->name('credit_notes');



/** Controlador Laboratorio */
Route::post('/laboratory/orders', [LaboratorioController::class, 'laboratory_orders'])->name('laboratory.orders');

Route::post('/laboratory/orders/status', [LaboratorioController::class, 'laboratory_orders_status'])->name('laboratory.orders.status');

Route::post('/laboratory/orders/status/aggregated', [LaboratorioController::class, 'laboratory_orders_status_aggregated'])->name('laboratory.orders.status.aggregated');

Route::post('/laboratory/orders/sample/questionnaire', [LaboratorioController::class, 'laboratory_orders_sample_questionnaire'])->name('laboratory.orders.sample.questionnaire');

Route::post('laboratory/orders/results/pdf', [LaboratorioController::class, 'laboratory_orders_results_pdf'])->name('laboratory.orders.results.pdf');

Route::post('/laboratory/result/history', [LaboratorioController::class, 'laboratory_result_history'])->name('laboratory.result.history');

Route::post('/laboratory/orders/sample', [LaboratorioController::class, 'laboratory_orders_sample'])->name('laboratory.orders.sample');

Route::post('/laboratory/orders/sample/confirm', [LaboratorioController::class, 'laboratory_orders_sample_confirm'])->name('laboratory.orders.sample.confirm');

Route::post('/laboratory/orders/samples/confirm', [LaboratorioController::class, 'laboratory_orders_samples_confirm'])->name('laboratory.orders.samples.confirm');

/** Controlador Laboratorio Datos Maestros */

Route::post('/laboratory/test_classes', [LaboratorioController::class, 'laboratory_test_classes'])->name('laboratory.test.classes');

Route::post('/laboratory/samples', [LaboratorioController::class, 'laboratory_samples'])->name('laboratory.samples');


/** Controlador Webhooks */
Route::post('/branch/created', [WebhooksController::class, 'branch_created'])->name('branch.created');
Route::post('/branch/updated', [WebhooksoController::class, 'branch_updated'])->name('branch.updated');
Route::post('/patient/created', [WebhooksController::class, 'patient_created'])->name('patient.created');
Route::post('/patient/updated', [WebhooksController::class, 'patient_updated'])->name('patient.updated');
Route::post('/price/list/created', [WebhooksController::class, 'price_list_created'])->name('price.list.created');
Route::post('/price/list/updated', [WebhooksController::class, 'price_list_updated'])->name('price.list.updated');
Route::post('/price/updated', [WebhooksController::class, 'price_updated'])->name('price.updated');
Route::post('/product/created', [WebhooksController::class, 'product_created'])->name('product.created');
Route::post('/product/updated', [WebhooksController::class, 'product_updated'])->name('product.updated');
Route::post('/product/code/updated', [WebhooksController::class, 'product_code_updated'])->name('product.code.updated');
Route::post('/invoice/created', [WebhooksController::class,'invoice_created'])->name('invoice.created');

