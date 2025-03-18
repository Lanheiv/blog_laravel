<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CategoriesController;


Route::get('/', function () {
    return view('index');
});

// Article sadaļa
Route::post('/article', [ArticleController::class, 'store']);

Route::get('/article', [ArticleController::class, "index"]);
Route::get('/article/create', [ArticleController::class, "create"]);

Route::get('/article/{article}', [ArticleController::class, 'show']);

// Categoris sadaļa
Route::post('/categorie', [CategoriesController::class, 'store']);

Route::get('/categorie', [CategoriesController::class, "index"]);
Route::get('/categorie/create', [CategoriesController::class, "create"]);

Route::get('/categorie/{categorie}', [CategoriesController::class, 'show']);
