<?php

use Illuminate\Support\Facades\Route;



Route::view('/','pages.home')->name('home');

Route::get('/about', function () {
    return view('pages.about');
})->name('about');


Route::get('/help', fn()=> view('pages.help') )->name('help');