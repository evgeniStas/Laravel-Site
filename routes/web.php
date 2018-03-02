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
Route::any('/admin', function () { // Display Admin page
    if (Auth::check())
    {
        return view('admin/dashboard');
    }else {
        return view('admin/login');
    }
});
Route::post('/admin/login', 'AdminController@login'); // Admin Login Form
Route::get('/admin/logout', function () { // Logout function
    Auth::logout();
    return view('admin/login')->with(["success_message"=>1,"message"=>"You have successfully signed out"]);
})->name('logout');


