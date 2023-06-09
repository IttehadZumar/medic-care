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
    return view('front.home');
});
Route::get('/about', function () {
    return view('front.about');
});
Route::get('/booking', function () {
    return view('front.booking');
});
Route::get('/contact', function () {
    return view('front.contact');
});
Route::get('/timeline', function () {
    return view('front.timeline');
});
Route::get('/testimonials', function () {
    return view('front.testimonials');
});
