<?php

use Illuminate\Support\Facades\Route;
//use App\Http\Controllers\HomeController;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::prefix('admin')->middleware('auth')->group(function () {
    Route::get('/', 'HomeController@index')->name('home');
    Route::resource('products', 'ProductController');
    Route::resource('customers', 'CustomerController');
});