<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view("dashboard");
});
Route::get("/test-route", function () {
    return view("test");
})->name("test");