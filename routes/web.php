<?php

use App\Http\Controllers\operationController;
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

Route::get('/', function () {
    return view('Home');
});

Route::get('/Addition', [operationController::class, 'showAddition']);

Route::get('/Soustraction', [operationController::class, 'showSoustraction']);

Route::get('/Division', [operationController::class, 'showDivision']);

Route::get('/Multiplication', [operationController::class, 'showMultiplication']);

Route::get('/Resultat', [operationController::class, 'showResultat']);