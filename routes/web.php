<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PenjualController;
use App\Http\Controllers\DataController;
use App\Http\Controllers\InfoController;
use App\Http\Controllers\JajanbaliController;
use App\Http\Controllers\PanenController;
use App\Http\Controllers\PetaniController;
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
Route::get('/', [HomeController::class, 'index']);
Route::get('/penjual', [PenjualController::class, 'index']);
Route::get('/data', [DataController::class, 'index'])->name('data');
Route::get('/info', [InfoController::class, 'index'])->name('info');
Route::get('/jajanbali', [JajanbaliController::class, 'index'])->name('jajanbali');
Route::get('/jajanbali/detail/{id_jajanbali}', [JajanbaliController::class, 'detail']);
Route::get('/jajanbali/add', [JajanbaliController::class, 'add']);
Route::post('/jajanbali/insert', [JajanbaliController::class, 'insert']);
Route::get('/jajanbali/edit/{id_jajanbali}', [JajanbaliController::class, 'edit']);
Route::post('/jajanbali/update/{id_jajanbali}', [JajanbaliController::class, 'update']);
Route::get('/jajanbali/delete/{id_jajanbali}', [JajanbaliController::class, 'delete']);

Route::resource('/panen',PanenController::class);
Route::get('/addPanen', [Panencontroller::class, 'create']);
Route::post('/addpanen/store',[PanenController::class, 'store']);
Route::resource('/petani',PetaniController::class);
Route::get('/inputpetani', [Petanicontroller::class, 'create']);
Route::post('/inputpetani/store',[PetaniController::class, 'store']);
Route::post('/inputpetani/update',[PetaniController::class, 'update']);
Route::get('/petani/destroy/id_kelompok_tani',[PetaniController::class, 'destroy']);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');