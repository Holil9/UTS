<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\TokoBungaController;
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

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/login',[LoginController::class, 'login'])->name('login');
Route::post('/loginuser',[LoginController::class, 'loginuser'])->name('loginuser');

Route::get('/register',[LoginController::class, 'register'])->name('register');
Route::post('/registeruser',[LoginController::class, 'registeruser'])->name('registeruser');

Route::get('/utama',[TokoBungaController::class, 'utama'])->name('utama');

Route::get('/index',[TokoBungaController::class, 'index'])->name('index');

Route::get('/tambahbunga',[TokoBungaController::class, 'tambahbunga'])->name('tambahbunga');
Route::post('/insertbunga',[TokoBungaController::class, 'insertbunga'])->name('insertbunga');

Route::get('/edittampil/{id}',[TokoBungaController::class, 'edittampil'])->name('edittampil');
Route::post('/update/{id}',[TokoBungaController::class, 'update'])->name('update');

Route::get('/delete/{id}',[TokoBungaController::class, 'delete'])->name('delete');

Route::get('/catalog',[TokoBungaController::class, 'catalog'])->name('catalog');