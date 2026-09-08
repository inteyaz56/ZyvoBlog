<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get("/add/blog", function () {
    return view("addblog");
});