<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
	return view('welcome');
});

Route::get('/home', function () {
	return view('home');
});

Route::get('/admin', function () {
	return view('admin/adminHome');
});

Route::get('/wishList', function () {
    return view('wishList');
});

Route::get('/aboutUs', function () {
    return view('aboutUs');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/register', function () {
    return view('register');
});

Route::get('/categoryList', function () {
    return view('categoryList');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/detail', function () {
    return view('detail');
});

Route::get('/faq', function () {
    return view('faq');
});

Route::get('/cart', function () {
    return view('cart');
});

Route::get('/categoryGrid', function () {
    return view('categoryGrid');
});

Route::get('/checkout', function () {
    return view('checkout');
});

Route::get('/accountOrder', function () {
    return view('accountOrder');
});

Route::get('/accountAddress', function () {
    return view('accountAddress');
});

Route::get('/accountInformation', function () {
    return view('accountInformation');
});

Route::get('/accountNewsletter', function () {
    return view('accountNewsletter');
});

