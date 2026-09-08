<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get("/add/blog", function () {
    return view("addblog");
});

Route::get("/users/register", [UserController::class, "showRegister"]);
Route::get("/users/login", [UserController::class, "showLogin"]);
Route::post("/users/login", [UserController::class, "login"]);
Route::post("/users/register", [UserController::class, "register"]);