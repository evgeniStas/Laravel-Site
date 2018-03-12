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

/*
 *
 * Main page of site
 *
 * */
Route::get('/', function () {
    return view('welcome');
});

/*
 *
 * Display Admin page
 * All Orders
 *
 * */
Route::any('/admin/', function () {
    if (Auth::check())
    {
        $orders = new \App\Order();
        $ordersAll = $orders->getAll();
        return view('admin/dashboard')->with(["orders"=>$ordersAll]);
    }else {
        return view('admin/login');
    }
})->name('admin');

/*
 *
 * Display admin login form
 *
 * */
Route::any('/admin/login/', 'AdminController@login')->name('login');

/*
 *
 * Logout function
 *
 * */
Route::get('/admin/logout/', function () {
    Auth::logout();
    return view('admin/login')->with(["success_message"=>1]);
})->name('logout');


/*
 *
 * Change lang user
 *
 * */
Route::get('/lang/{locale}', function ($locale) {
    if (in_array($locale, \Config::get('app.locales'))) {
        Session::put('locale', $locale);
    }
    return redirect()->back();
});

/*
 *
 *
 * Dashboard Routes
 *
 *
 *
 * */

/*
 *
 * Add new order
 *
 * */
Route::get('/admin/add/', function () {
    if (Auth::check())
    {
        $clients = new \App\Client();
        $clientsAll = $clients->getAll();

        $categories = new \App\Category();
        $categoriesAll = $categories->getAll();
        return view('admin/add')->with(["clients"=>$clientsAll,"categories"=>$categoriesAll]);
    }else {
        return view('admin/login');
    }
})->name('admin.addOrder');

/*
 *
 * Add new client
 *
 * */
Route::get('/admin/addClient/', function () {
    if (Auth::check())
    {
        return view('admin/addClient');
    }else {
        return view('admin/login');
    }
})->name('admin.addClient');
Route::post('/admin/addClient/', 'AdminController@addClient')->name('AddNewClient');


