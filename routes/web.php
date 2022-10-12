<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\FrenolController;

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
    return redirect('frenol');
});
Auth::routes();

Route::get('/frenol', [FrenolController::class, 'index'])->name('frenol');
Route::get('about', [FrenolController::class, 'about'])->name('about');
Route::get('mail', [FrenolController::class, 'info'])->name('mail');


//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
