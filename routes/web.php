<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return "Olá, seja bem vindo ao curso !";
// });

Route::get('/', [\App\Http\Controller\PrincipalController::class, 'principal']);

Route::get('/', [\App\Http\Controller\SobreNosController::class, 'sobreNos']);

Route::get('/', [\App\Http\Controller\ContatoController::class, 'contato']);