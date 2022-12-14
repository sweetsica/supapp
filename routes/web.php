<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ExcelController;
use App\Http\Controllers\HumanController;
use App\Http\Controllers\CustomerDMSController;
use Illuminate\Http\Request;
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

Route::get('/nhap', [ExcelController::class,'getImportView']);
Route::post('/nhap-luu', [ExcelController::class,'setImport'])->name('excel.import');
Route::post('/nhap-luu-dms-buon', [ExcelController::class,'setImportDMS'])->name('excel.import.dms.buon');
Route::post('/nhap-luu-dms-le', [ExcelController::class,'setImportDMS'])->name('excel.import.dms.le');

Route::get('/human-list',[HumanController::class,'index'])->name('human.list');
Route::get('/customer-dms-list',[CustomerDMSController::class,'index'])->name('customerdms.list');
