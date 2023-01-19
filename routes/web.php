<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PessoasController;

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

Route::prefix('pessoas')->group(function(){
    Route::get('/', [PessoasController::class, 'index'])->name('pessoas-index');
    Route::get('/create', [PessoasController::class, 'create'])->name('pessoas-create');
    Route::post('/', [PessoasController::class, 'store'])->name('pessoas-store');
});
