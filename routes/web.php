<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('news', function(){
    return view('pages.news');
});

Route::get('category', function(){
    return view('pages.category');
});
