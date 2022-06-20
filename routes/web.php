<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\HomeController;
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

Route::group(['prefix' => 'login','as' => 'login::'],function (){
    Route::get('/',[LoginController::class,'index'])->name('index');
    Route::post('/',[LoginController::class,'login'])->name('login');
    Route::get('/',[LoginController::class,'index'])->name('index');
    Route::post('/',[LoginController::class,'login'])->name('login');
});

Route::get('/',[HomeController::class,'home'])->name('home');
Route::get('/profile',[HomeController::class,'profile'])->name('profile');
Route::get('/visi-misi',[HomeController::class,'visionMission'])->name('vision-mission');
Route::get('/produk',[HomeController::class,'product'])->name('product');
Route::get('/kontak',[HomeController::class,'contact'])->name('contact');
Route::get('/about',[HomeController::class,'about'])->name('about');
Route::get('/klien',[HomeController::class,'client'])->name('client');
Route::get('/galeri',[HomeController::class,'gallery'])->name('gallery');
