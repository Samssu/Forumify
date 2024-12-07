<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('login', function () {
    return view('pages.auth.login');
});

Route::get('sign-up', function () {
    return view('pages.auth.sign-up');
});