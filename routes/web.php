<?php

use App\Http\Controllers\ProfileController;
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
    return view('welcome');
});

Auth::routes();


Route::post('/profile', [
    'uses' => 'App\Http\Controllers\ProfileController@update',
    'as' => 'profile.update'
])->middleware('auth');

// Route::post('/profile', [App\Http\Controllers\ProfileController::class, 'edit'])->name('');
Route::get('/profile', [App\Http\Controllers\ProfileController::class, 'edit'])->name('profile')->middleware('auth');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
