<?php

use App\Http\Controllers\Admin\UserController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

// Frontend

Route::get('profile/{name}',  'Frontend\UserController@profile');
Route::post('update-ava','UserController@update_avatar');

Route::get('changestatus', 'UserController@status')->name('changestatus');




// Admin
Route::namespace('Admin')->prefix('admin')->name('admin.')->middleware('can:manage-users')->group(function(){
    Route::resource('/users', 'UserController',['except' => ['show','create','store']]);
    Route::get('dashboard', 'DashboardController@index')->name('dashboard');

    // Customers
    Route::get('customers', 'DashboardController@customers')->name('customers');
    Route::get('customers/new', 'DashboardController@customers_new')->name('customers.new');
});



// SuperAdmin
Route::namespace('Superadmin')->prefix('superadmin')->name('superadmin.')->middleware('can:manage-users')->group(function(){
    Route::resource('/users', 'UserController',['except' => ['show','create','store']]);
});
