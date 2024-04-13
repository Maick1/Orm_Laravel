<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get("/articulos", 'ArticuloController@index'); //mostrar
Route::post('/articulos','ArticuloController@create'); //crear
Route::put('/articulos/{id}','ArticuloController@update');  //actulizar
Route::delete('/articulos/{id}', 'ArticuloController@destroy') ;  //Eliminar

