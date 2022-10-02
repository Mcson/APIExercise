<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CatsController;
use App\Http\Controllers\CatsDogsBreedController;
use App\Http\Controllers\CatsDogsListController;
use App\Http\Controllers\DogsController;

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

//Home route
Route::get('/', [HomeController::class, 'index']);


//Cats and Dogs api end point
Route::get("/v1/breeds", [CatsDogsBreedController::class, 'combined_cat_dog_breed']);
Route::get("/v1/breeds/:breed", [CatsController::class, 'image_list_cat_dog_breed']);
Route::get("/v1/list", [CatsDogsListController::class, 'list_cat_dog_breed']);
Route::get("/v1/:image", [DogsController::class, 'image_list_dog_breed']);



// Route::get("/{id}", [BreedApiController::class, 'breed_info']);
// Route::get("/v1/breeds?page={page}&limit={limit}", [BreedApiController::class, 'test']);


