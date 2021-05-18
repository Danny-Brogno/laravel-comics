<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('paperino', "TestController@testPage");

Route:: get('home', 'TestController@home');

Route::get('/elem/{index}', 'TestController@elem')
-> name('routShowElem');

// Go see home.blade.php "a href"
