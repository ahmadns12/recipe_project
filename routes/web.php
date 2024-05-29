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
    return view('welcome');
});

Route::get('/login', function () {
    return view('page/landing_page/login');
});

Route::get('/home', function () {
    return view('page/landing_page/home');
});

Route::get('/nutrition', function () {
    return view('page/landing_page/nutrition');
});

Route::get('/upload', function () {
    return view('page/landing_page/unggah_resep');
});

Route::get('/recipe', function () {
    return view('page/recipe_page/recipe');
});

Route::get('/recipe/dessert', function () {
    return view('page/recipe_page/recipe_desert');
});