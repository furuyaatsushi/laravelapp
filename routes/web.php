<?php

use Illuminate\Support\Facades\Route;

Route::get('hello', 'HelloController@index');
Route::post('hello', 'HelloController@post');