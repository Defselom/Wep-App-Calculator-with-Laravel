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
    return view('home');
});

Route::get('/Addition', [operationController::class, 'showAddition']);

Route::get('/Soustraction', function () {
    return view('Soustraction');
});

Route::get('/Division', function () {
    return view('Division');
});

Route::get('/Multiplication', function () {
    return view('Multiplication');
});

Route::get('/Resultat', function () {
    return view('Resultat');
});