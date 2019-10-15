<?php

use Illuminate\Http\Request;

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

//met gebruik van Controllers
Route::get('/', 'ProductController@index'); //alle concerts ophalen

Route::post('/switch', 'ProductController@switchFav'); //fav update van concert op basis van id

Route::get('/search', 'ProductController@searchConcerts');  //concerts ophalen op basis van naam


//deel 2
Route::get('/detail/{id}', 'ProductController@showDetails'); //detailpagina tonen

Route::get('/detail/{id}/image/{path}', 'ProductController@showImage'); //image pagina tonen