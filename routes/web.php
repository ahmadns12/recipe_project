<?php

use App\Http\Controllers\RecipeController;
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

// LOGIN
Route::get('/login', [RecipeController::class,'login_page'])->name('login');
Route::post('/signup_action', [RecipeController::class,'signup']);
Route::post('/login_action', [RecipeController::class,'login']);
Route::get('/logout_action', [RecipeController::class,'logout']);


Route::get('/home', [RecipeController::class,'home_page']);
Route::get('/nutrition', [RecipeController::class,'nutrition_page']);

Route::get('/recipe', [RecipeController::class,'recipe_page']);

Route::get('/recipe/dessert', function () {
    return view('page/recipe_page/recipe_desert');
});

Route::get('/recipe/traditional', function () {
    return view('page/recipe_page/recipe_traditional');
});

Route::get('/recipe/international', function () {
    return view('page/recipe_page/recipe_international');
});

Route::get('/recipe/drink', function () {
    return view('page/recipe_page/recipe_drink');
});

Route::get('/recipe/cake', function () {
    return view('page/recipe_page/recipe_cake');
});

Route::middleware(['auth'])->group(function(){
    Route::get('/upload', [RecipeController::class,'upload_page']);
});