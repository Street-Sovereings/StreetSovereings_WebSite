<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('main');
});

Route::get('/forum', function () {
    return view('forum');
});

Route::get('/careers', function () {
    return view('careers');
});

Route::get('/download', function () {
    return view('download');
});

Route::get('/news', function() {
    return view("news");
});