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

Route::get("/", "PageController@index");
Route::get("/dvorana", "PageController@dvorana");
Route::get("/galerija", "PageController@galerija");
Route::get("/planer", "PageController@planer");
Route::get("/blog", "PageController@blog");
Route::get("/blog/{id}", ["uses" => "PageController@blogId"]);
Route::get("/admin", "PageController@admin");

Route::post("/galerija", "GalerijaController@getImg");
Route::post("/planer", "PlanerController@submitPlaner");
Route::post("/admin", "AdminController@login");
