<?php

use App\Http\Controllers\JurusanController;
use App\Http\Controllers\KelasController;
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
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});



// JURUSAN
Route::get('/jurusan', [JurusanController::class, 'index']);
Route::get('',[JurusanController::class,'create']);
Route::delete('',[JurusanController::class,'destroy']);
Route::get('',[JurusanController::class,'edit']);
Route::put('',[JurusanController::class,'update']);
// KELAS
Route::get('/kelas', [KelasController::class, 'index']);
Route::get('',[KelasController::class,'create']);
Route::delete('',[KelasController::class,'destroy']);
Route::get('',[KelasController::class,'edit']);
Route::put('',[KelasController::class,'update']);

