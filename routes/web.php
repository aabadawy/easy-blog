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
    dd(\App\Models\Blog::all());
});

Route::resource('blogs', 'Web\BlogsController');
Route::get('activity-log', 'Web\BlogsController@activity')->name('activity.log');
