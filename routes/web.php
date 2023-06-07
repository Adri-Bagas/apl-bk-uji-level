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

    //ROUTE DASHBOARD JANGAN DI PAKE
    // Route::get('/dashboard', function () {
    //     return view('dashboard');
    // })->name('dashboard');

    Route::get('/dashboard', function () {
        return view('dashboards.pages.main');
    })->name('dashboard');
});



// JURUSAN
Route::get('/jurusan', [JurusanController::class, 'index'])->name('jurusan');
Route::get('/jurusan/create',[JurusanController::class,'create']);
Route::delete('/jurusan/delete',[JurusanController::class,'destroy']);
Route::get('/jurusan/edit/{id}',[JurusanController::class,'edit']);
Route::put('/jurusan/{id}',[JurusanController::class,'update']);
Route::get('/jurusan/{id}', [JurusanController::class, 'show']);
// KELAS
Route::get('/kelas', [KelasController::class, 'index'])->name('kelas');
Route::get('/kelas/create',[KelasController::class,'create']);
Route::delete('/kelas/delete',[KelasController::class,'destroy']);
Route::get('/kelas/{id}/edit',[KelasController::class,'edit']);
Route::put('/kelas/{id}',[KelasController::class,'update']);
Route::get('/kelas/{id}', [KelasController::class, 'show']);

