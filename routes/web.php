<?php

use App\Http\Controllers\ProdukRekening;
use App\Http\Controllers\Rekening;
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
//     return view('welcome');
// });

Route::get('/', [Rekening::class, 'inquiryRekening']);
Route::get('/create', [Rekening::class, 'createRekening']);
Route::get('/product', [ProdukRekening::class, 'productRekening']);
Route::get('/product/create', [ProdukRekening::class, 'createProduct']);
Route::post('/product/addNewProduct', [ProdukRekening::class, 'addNewProduct']);
