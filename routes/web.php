<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('login', function () {
    return view('pages.auth.login');
})->name('auth.login.show');

Route::get('sign-up', function () {
    return view('pages.auth.sign-up');
})->name('auth.sign-up.show');

Route::get('obrolan', function () {
    return view('pages.obrolan.index');
})->name('obrolan.index');

Route::get('obrolan/lorem', function () {
    return view('pages.obrolan.show');
})->name('obrolan.show');

Route::get('obrolan/create', function () {
    return view('pages.obrolan.form');
})->name('obrolan.create');