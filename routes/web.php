<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\VehiculeController;
use Illuminate\Support\Facades\Route;

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

Route::get('/index', [VehiculeController::class, 'index'])->name('vehicule.index');
Route::get('/create', [VehiculeController::class, 'create'])->name('vehicule.create');
Route::post('/post', [VehiculeController::class, 'store'])->name('vehicule.post');
Route::get('show/{vehicule}',[VehiculeController::class,'show'])->name('vehicule.show');
Route::get('vehicule/{vehicule}/edit',[VehiculeController::class,'edit'])->name('vehicule.edit');
Route::patch('vehicule/{vehicule}', [VehiculeController::class, 'update'])->name('vehicule.update');
Route::delete('vehicule/{vehicule}',[VehiculeController::class, 'destroy'])->name('vehicule.delete');

Route::get('login', [AuthController::class, 'login'])->name('auht.login');
Route::get('register', [AuthController::class, 'register'])->name('auht.register');
Route::post('registerpost', [AuthController::class, 'registerPost'])->name('auth.registerPost');
Route::post('loginpost', [AuthController::class, 'loginPost'])->name('auth.loginPost');
Route::get('logout', [AuthController::class, 'logout'])->name('logout');


Route::get('/', function () {
    return view('welcome');
});
