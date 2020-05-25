<?php

use Illuminate\Support\Facades\Route;

Route::get('hello/{id?}', 'HelloController@index');