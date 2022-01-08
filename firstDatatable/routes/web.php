<?php

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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/simple', [App\Http\Controllers\DatatableController::class, 'simple'])->name('simple');
Route::get('/datatable', [App\Http\Controllers\DatatableController::class, 'datatable'])->name('datatable');
Route::get('/ajax', [App\Http\Controllers\DatatableController::class, 'ajax'])->name('ajax');

Route::get('/users', [App\Http\Controllers\DatatableController::class, 'getUsers'])->name('get.users');

Route::get('/anyData', [App\Http\Controllers\DatatablesController::class, 'anyData'])->name('datatables.data');
Route::get('/getIndex', [App\Http\Controllers\DatatablesController::class, 'getIndex'])->name('datatables');


