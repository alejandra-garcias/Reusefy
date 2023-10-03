<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdController;
use App\Http\Controllers\PublicController;
use App\Models\Ad;
use Illuminate\Support\Facades\Auth;

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
})->name('home');
Route::get('/',[PublicController::class,'index'])->name('home');
Route::get('/category/{category:name}/ads',[PublicController::class,'adsByCategory'])->name('category.ads');
Route::get('/ads/create', [AdController::class,'create'])->name('ads.create');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/ads/{ad}',[AdController::class,'show'])->name("ads.show");


