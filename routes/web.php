<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TownController;
use App\Http\Controllers\InstitutionController;
use App\Http\Controllers\AreaController;
use App\Http\Controllers\AdminInstitutionController;

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
 
Route::resource('town', TownController::class);
Route::resource('institution', InstitutionController::class);
Route::resource('area', AreaController::class);

Auth::routes();

Route::group(['middleware' => 'auth'], function () {
    Route::resource('admin/institution', AdminInstitutionController::class);
});
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
