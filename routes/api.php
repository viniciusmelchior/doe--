<?php

use App\Http\Controllers\HemocentroController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/usuarios', [UserController::class, 'index'])->name('usuarios.index');
Route::post('/usuario/store', [UserController::class, 'store'])->name('usuarios.store');
Route::post('/usuario/delete/{id}', [UserController::class, 'destroy'])->name('usuarios.delete');
Route::get('/usuario/show/{id}', [UserController::class, 'show'])->name('usuarios.show');

Route::get('/hemocentros', [HemocentroController::class, 'index'])->name('hemocentros.index');
Route::post('/hemocentros/store', [HemocentroController::class, 'store'])->name('hemocentros.store');
