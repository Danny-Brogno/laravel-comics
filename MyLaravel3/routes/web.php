<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('paperino', "TestController@testPage");

Route:: get('home', 'TestController@home');

Route::get('/elem/{index}', 'TestController@element')
-> name('elem');
