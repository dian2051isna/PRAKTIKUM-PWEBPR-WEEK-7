<?php

use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;
use Faker\Generator as Faker;

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote')->hourly();

Route::get('/', function () {
    return view('homepage');
});

Route::get('/Home', function () {
    return view('homepage');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/register', function () {
    return view('register');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('layout/app', function () {
    return view('/layout/app');
});