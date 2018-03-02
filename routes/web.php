<?php

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

Route::get('/', function () { // Main page of site
    return view('welcome');
});
Route::get('/admin', function () { // Display Admin page
    return view('admin');
});
Route::post('/admin/login', 'AdminController@login'); // Admin Login Form


