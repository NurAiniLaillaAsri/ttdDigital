<?php

use App\Http\Controllers\CustomerController;
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

// Route::get('/form', function () {
//     return view('form');
// });

Route::get('/form', [CustomerController::class, 'index']);
Route::post('/form', [CustomerController::class, 'store']);
Route::get('/customers', [CustomerController::class, 'dataCustomers']);
Route::get('/customers/{id}', [CustomerController::class, 'show']);
Route::get('/customers/{id}/pdf', [CustomerController::class, 'generatePDF'])->name('customers.pdf');