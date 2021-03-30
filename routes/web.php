<?php

use App\Http\Controllers\ActivitatController;
use App\Http\Controllers\FormulariController;
use App\Http\Controllers\GaleriaController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
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

Route::get('/',HomeController::class )->name('home');
Route::get('galeria',[GaleriaController::class,'galeries'] )->name('galeria');
Route::get('activitats',[ActivitatController::class,'home'] )->name('activitats.home');
Route::get('activitats/tennis',[ActivitatController::class,'tennis'] )->name('activitats.tennis');
Route::get('activitats/pàdel',[ActivitatController::class,'pàdel'] )->name('activitats.pàdel');
Route::get('activitats/casal',[ActivitatController::class,'casal'] )->name('activitats.casal');
Route::get('activitats/torneig',[ActivitatController::class,'torneig'] )->name('activitats.torneig');
Route::get('activitats/calendari',[ActivitatController::class,'calendari'] )->name('activitats.calendari');
Route::get('register',[FormulariController::class,'register'] )->name('register');
Route::post('register',[FormulariController::class,'store'] )->name('register.store');
//Route::resource('activitats', [ActivitatController::class]);