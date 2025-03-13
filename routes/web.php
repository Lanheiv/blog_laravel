<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CategoriesController;


Route::get('/', function () {
    return view('index');
});

// Article sadaļa
Route::get('/article', [ArticleController::class, "index"]);
Route::get('/article/create', [ArticleController::class, "create"]);

// Categoris sadaļa
Route::get('/categorie', [CategoriesController::class, "index"]);