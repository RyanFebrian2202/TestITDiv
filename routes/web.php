<?php

use App\Http\Controllers\InvoiceController;
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

// Route::get('/', function () {
//     return view('menu');
// })->name('menu');

Route::get('/',[InvoiceController::class,'getInvoiceDetail'])->name('getInvoice');

Route::patch('/update/{no}',[InvoiceController::class,'updateInvoice'])->name('updateInvoice');

Route::delete('/delete/{no}',[InvoiceController::class,'deleteInvoice'])->name('deleteInvoice');
