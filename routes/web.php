<?php

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

Route::get('/', function () {
    return view('pages.login');
});

Auth::routes();

Route::get('/test', [App\Http\Controllers\HomeController::class, 'test'])->name('test');
Route::get('/login', [App\Http\Controllers\HomeController::class, 'login'])->name('login');
Route::get('/accounts', [App\Http\Controllers\HomeController::class, 'accounts'])->name('accounts');
Route::get('/createaccount', [App\Http\Controllers\HomeController::class, 'createAccount'])->name('createaccount');
Route::get('/addfunds', [App\Http\Controllers\HomeController::class, 'addFunds'])->name('addfunds');
Route::get('/withdrawfunds', [App\Http\Controllers\HomeController::class, 'withdrawFunds'])->name('withdrawfunds');
Route::get('/adminlogin', [App\Http\Controllers\HomeController::class, 'adminLogin'])->name('adminlogin');
Route::get('/createadmin', [App\Http\Controllers\HomeController::class, 'createAdmin'])->name('createadmin');

Route::fallback(function() {
    return view('pages.fourohfour');
});