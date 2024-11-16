<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('user.home');
});

Route::get('/services', function () {
    return view('user.services');
});

Route::get('/doctors', function () {
    return view('user.doctors');
});

Route::get('/bloodbank', function () {
    return view('user.bloodbank');
});

Route::get('/medcertificate', function () {
    return view('user.medcertificate');
});

Route::get('/notices', function () {
    return view('user.notices');
});