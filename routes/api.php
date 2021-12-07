<?php

use App\Http\Controllers\ClientsController;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::apiResource('clientes', ClientsController::class);
Route::get('/consulta/final-placa/{numero}', [ClientsController::class, 'consultaFinalPlaca']);
//Route::get('/clientes', [ClientsController::class, 'index']);


Route::get('run-migration',function(){ Artisan::call('migrate', array('--force' => true));});
Route::get('run-seeder/{class}',function($class){ Artisan::call("db:seed",array('--class'=>$class));});