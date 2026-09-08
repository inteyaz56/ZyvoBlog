<?php

use App\Http\Controllers\UserController;
use App\Http\Middleware\CheckUser;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get("/add/blog", function () {
    return view("addblog");
});

Route::middleware([CheckUser::class])->group(function () {

    Route::prefix("users")->group(function () {

        //Register Page
        Route::get("/register", [UserController::class, "showRegister"]);

        //Login Page
        Route::get("/login", [UserController::class, "showLogin"]);

        //Register
        Route::post("/register", [UserController::class, "register"]);

        //Login
        Route::post("/login", [UserController::class, "login"]);
    });;

});