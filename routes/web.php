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

Route::get('/', 'PagesController@index');
Route::get('/about', 'PagesController@about');

Auth::routes();
Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
// Route::get('/dashboard', 'DashboardController@index');

Route::resource('projects', 'ProjectsController');

Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');

Route::post('/', 'PagesController@sendEmail');
