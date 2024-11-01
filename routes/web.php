<?php

use App\Http\Controllers\UserController;
use App\Models\User;
use Illuminate\Support\Facades\Route;
use Faker\Factory as Faker;

Route::get('/', function () {
    return view('welcome');
});

Route::get("/login", function () {
    return view("login",);
});

Route::get("/contact", function () 
{
    $users = User::all();
    return view("homepage", ['contacts' => $users]);
});

Route::get("/home", [UserController::class, "index"]);
Route::get("/create-user", [UserController::class, "create"])->name("create-user");