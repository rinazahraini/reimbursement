<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\Auth\AuthLoginController;
use App\Http\Controllers\Auth\Pengguna\LoginController;


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


// Route::get('/', [LoginController::class, 'getLogin'])->name('login.user');


Route::group(['prefix' => 'auth'], function(){
    Route::get('/master/masuk', [AuthLoginController::class, 'getLogin'])->name('login.admin');
    Route::post('/master/masuk', [AuthLoginController::class, 'postLogin']);
}); 

// Route::group(['prefix' => 'pengguna'], function(){
    Route::get('/', [LoginController::class, 'getLogin'])->name('login.user');
    Route::post('/', [LoginController::class, 'postLogin']);
// });

Route::group(['middleware' => ['auth:masterauth'], 'as' => 'admin.'], function() {

    Route::get('/dashboard', [FrontendController::class, 'indexAdmin'])->name('dashboard');

    Route::post('auth/master/logout', [AuthLoginController::class, 'postLogout'])->name('keluar');
});

Route::group(['middleware' => ['auth:user']], function() {

    Route::get('/home', [FrontendController::class, 'index'])->name('home');

    Route::get('/status', [FrontendController::class, 'status'])->name('status');

    Route::post('/logout', [LoginController::class, 'postLogout'])->name('keluar');

});

