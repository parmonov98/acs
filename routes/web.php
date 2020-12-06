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
    return view('home');
});

Auth::routes();


Route::post('/profile', [
    'uses' => 'App\Http\Controllers\PageController@update',
    'as' => 'profile.update'
])->middleware('auth');

Route::get('/appeals', [
    'uses' => 'App\Http\Controllers\PageController@appeals',
    'as' => 'profile.appeals'
])->middleware('auth');

// Route::post('/profile', [App\Http\Controllers\ProfileController::class, 'edit'])->name('');
Route::get('/appeals/new', [App\Http\Controllers\PageController::class, 'newAppeal'])->name('newAppeal')->middleware('auth');
Route::get('/stats', [App\Http\Controllers\ProfileController::class, 'employeeStats'])->name('appeals.stats.employees')->middleware('auth');
Route::get('/employee/appeals', [App\Http\Controllers\AppealController::class, 'employeeAppeals'])->name('employee.appeals')->middleware('auth');
Route::get('/organization/appeals', [App\Http\Controllers\AppealController::class, 'organizationAppeals'])->name('organization.appeals')->middleware('auth');

Route::get('/profile', [App\Http\Controllers\PageController::class, 'edit'])->name('profile')->middleware('auth');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::resource('post', 'PostController')->only('index', 'store');

Route::resource('employee', 'EmployeeController')->only('index', 'store');

Route::resource('job', 'JobController')->only('index', 'store');


Route::resource('post', 'PostController')->only('index', 'store');

Route::resource('employee', 'EmployeeController')->only('index', 'store');

Route::resource('job', 'JobController')->only('index', 'store');


Route::resource('employee', 'EmployeeController')->only('index', 'store');

Route::resource('job', 'JobController')->only('index', 'store');


Route::resource('employee', 'EmployeeController')->only('index', 'store');

Route::resource('job', 'JobController')->only('index', 'store');
