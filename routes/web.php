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
Route::get ('/soma','\App\Http\Controllers\CalculadoraController@soma')->name('carregarSoma');
Route::get ('/sub','\App\Http\Controllers\CalculadoraController@sub')->name('carregarSub');
Route::get ('/multip','\App\Http\Controllers\CalculadoraController@multip')->name('carregarMultip');
Route::get ('/divisao','\App\Http\Controllers\CalculadoraController@divisao')->name('carregarDivisao');
Route::get ('/operacoes','\App\Http\Controllers\CalculadoraController@operacoes')->name('carregarMenu');

Route::post('/calcular-soma','\App\Http\Controllers\CalculadoraController@calcularSoma')->name('somar');
Route::post('/calcular-sub','\App\Http\Controllers\CalculadoraController@calcularSub')->name('subtrair');
Route::post('/calcular-multip','\App\Http\Controllers\CalculadoraController@calcularMultip')->name('multiplicar'); 
Route::post('/calcular-divisao','\App\Http\Controllers\CalculadoraController@calcularDivisao')->name('dividir'); 