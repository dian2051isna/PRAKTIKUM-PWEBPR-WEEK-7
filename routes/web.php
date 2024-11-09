<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\AuthController; // Tambahkan ini
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

Route::get("/login", function (){
    return view("auth/login",);
})->name("login"); 
Route::post('/login', [AuthController::class, 'authenticate']);

Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/register', [AuthController::class, 'store']);
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');


Route::get("/home", [UserController::class, "index"]);
Route::get("/create-user", [UserController::class, "create"])->name("create-user");
Route::post("/create-user", [UserController::class, "store"])->name("store-user");
Route::get("/edit-user/{user}", [UserController::class, "edit"])->name("edit-user");
Route::put("/update-user/{user}", [UserController::class, "update"])->name("update-user");
