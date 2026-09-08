<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\GuestMiddleware;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {

    if (Auth::check()) {
        return view("index");
    }

    return redirect("/login");

});

Route::middleware([GuestMiddleware::class])->group(function () {

    // Register page

    Route::prefix("users")->group(function () {

        Route::get("/register", [
            UserController::class,
            "showRegister",
        ]);

        // Register
        Route::post("/register", [
            UserController::class,
            "register",
        ]);

        // Login page
        Route::get("/login", [
            UserController::class,
            "showLogin",
        ]);

        // Login
        Route::post("/login", [
            UserController::class,
            "login",
        ]);
    });

});

Route::prefix("blogs")->group(function () {

    Route::get("/", [
        BlogController::class,
        "getAllBlogs",
    ]);

    Route::get("/add", [
        BlogController::class,
        "showBlog",
    ]);

    Route::post("/add", [
        BlogController::class,
        "addBlog",
    ]);

});
