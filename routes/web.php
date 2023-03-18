<?php

use Illuminate\Support\Facades\Route;
use  App\Http\Controllers\SuperherosController; //IMPORTAR CONTROLADOR


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

Route::get('/', [SuperherosController::class, 'index']) -> name (''); //MANDAR  A LLAMAR LA CLASE
Route::get('/heroes', [SuperherosController::class, 'female']) -> name ('men-heroes'); //MANDAR  A LLAMAR LA CLASE
Route::get('example', [SuperherosController::class, 'men']) -> name ('female-heroes'); // Mostrar solo superhéroes mujeres
