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
    return view('admin.test.index');
})->name('home');

Route::get('/latest/condos','admin\HomeController@index')->name('report.details');
Route::get('/smallest/condos/units','admin\HomeController@smallestCondowsByUnits')->name('report.details.smallestcondowsbyunits');

