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

/* Page routes */
Route::get('/', 'ProductController@index')->name('index'); //show the home page

Route::get('/beers', 'ProductController@beers')->name('beers'); //show all the beers with form

Route::post('/beers', 'ProductController@beers_search')->name('beers.search'); //handle search

Route::get('/breweries', 'ProductController@breweries')->name('breweries'); //show all the breweries

Route::get('/beer/{id}', 'ProductController@beer_detail')->name('beer.detail'); //show details of a beer

Route::get('/brewery/{id}', 'ProductController@brewery_detail')->name('brewery.detail'); //show details of a brewery

/* Create or update beer routes => ONLY FOR ADMINS */
Route::get('/create', 'PostController@create')->middleware('admin')->name('create'); //show the form to create a new beer

Route::post('/store', 'PostController@store')->middleware('admin')->name('store'); //store new beer in DB

Route::get('/edit/{id}', 'PostController@edit')->middleware('admin')->name('edit'); //show the form to update beer

Route::post('/update/{id}', 'PostController@update')->middleware('admin')->name('update'); //update edited beer in DB

Route::post('/delete/{id}', 'PostController@delete')->middleware('admin')->name('delete'); //delete beer by ID

/* Login routes */
//Auth::routes(); //made my own routes, no user registration implemented

Route::get('/login', 'Auth\LoginController@showLoginForm')->name('login'); //show login form

Route::post('/login', 'Auth\LoginController@login')->name('loginHandle'); //handle login form

Route::get('/logout', 'Auth\LoginController@logout')->name('logout'); //log out user

/* User routes */
Route::get('/profile', 'HomeController@dashbord')->middleware('user')->name('dashbord'); //show page of user

Route::post('/switch/{id}', 'HomeController@switchFavourite')->middleware('user')->name('switch'); //switch the favourite beer
