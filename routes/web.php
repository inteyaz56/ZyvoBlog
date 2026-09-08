<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\AuthUser;
use App\Http\Middleware\GuestMiddleware;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {

    if (Auth::check()) {
        return app(BlogController::class)->getAllBlogs();
    }

    return redirect("/users/login");

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

Route::middleware([AuthUser::class])->group(function () {

    Route::post("/users/logout", [UserController::class, "logout"]);
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

});
