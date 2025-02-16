<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/jobs', function () {
    return view('jobs');
});

Route::get('/careers', function () {
    return view('careers');
});

Route::get('/salaries', function () {
    return view('salaries');
});

Route::get('/companies', function () {
    return view('companies');
});

Route::get('/postjob', function () {
    return view('postjob');
});
