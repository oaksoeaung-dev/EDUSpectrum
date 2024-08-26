<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name("home");

Route::get("/about", function() {
    return view("about");
})->name("about");

Route::get("/course", function() {
    return view("course");
})->name("course");

Route::get("/contact", function() {
    return view("contact");
})->name("contact");

Route::get("/teachers", function() {
    return view("teachers");
})->name("teachers");