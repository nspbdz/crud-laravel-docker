<?php

use App\Http\Controllers\PlaceController;
use App\Http\Controllers\TestController;
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




Route::get('/', [TestController::class, 'index']);
Route::get('test/create', [TestController::class, 'create']);
Route::get('test/edit/{id}', [TestController::class, 'edit']);
Route::post('test/store', [TestController::class, 'store']);
Route::post('test/update', [TestController::class, 'update']);
Route::delete('test/hapus/{id}', [TestController::class, 'destroy'])->name('destroy');