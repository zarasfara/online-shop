<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.index');
});

Route:: get("/dashboard", function() {
    return view("pages.dashboard");
});