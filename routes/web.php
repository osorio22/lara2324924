<?php

use App\Http\Controllers\studentcontroller;
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
Route::get("/nombre/{nombre}/{apellido?}",function($nombre,$apellido=""){
  return "hola,".$nombre." ".$apellido;
})->name("saludaNombreCompleto"); 
Route::resource("/estudiantes",studentcontroller::class);