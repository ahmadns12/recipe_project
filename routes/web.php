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
Route::get('/recipe/dessert', [RecipeController::class,'recipe_dessert_page']);
Route::get('/recipe/traditional', [RecipeController::class,'recipe_traditional_page']);
Route::get('/recipe/international', [RecipeController::class,'recipe_international_page']);
Route::get('/recipe/drink', [RecipeController::class,'recipe_drink_page']);
Route::get('/recipe/cake', [RecipeController::class,'recipe_cake_page']);

Route::middleware(['auth'])->group(function(){
    Route::get('/upload', [RecipeController::class,'upload_page']);
});