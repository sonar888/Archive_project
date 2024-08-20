<?php

use Illuminate\Support\Facades\Route;

Route::get('/works', function () {
    return view('works.index');
});

Route::get('/tags', function () {
    return view('tags.index');
});

