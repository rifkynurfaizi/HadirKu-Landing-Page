<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('landing/index');
});

Route::get('/Frequently-Asked-Questions', function () {
    return view('landing/faq');
});

Route::get('/Pricing', function () {
    return view('landing/pricing');
});

Route::get('/Blog-details', function () {
    return view('landing/blog-detail');
});