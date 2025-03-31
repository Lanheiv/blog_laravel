<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\CommentController;



Route::get('/', function () {
    return view('index');
});

// Article sadaļa
Route::post('/article', [ArticleController::class, 'store']);
Route::put('/article/{article}', [ArticleController::class, 'update']);
Route::delete('/article/{article}', [ArticleController::class, 'destroy']);

Route::get('/article', [ArticleController::class, "index"]);
Route::get('/article/create', [ArticleController::class, "create"]);
Route::get('/article/{article}', [ArticleController::class, 'show']);
Route::get('/article/{article}/edite', [ArticleController::class, 'edit']);

// Categoris sadaļa
Route::post('/categorie', [CategoriesController::class, 'store']);
Route::put('/categorie/{categorie}', [CategoriesController::class, 'update']);
Route::delete('/categorie/{categorie}', [CategoriesController::class, 'destroy']);

Route::get('/categorie', [CategoriesController::class, "index"]);
Route::get('/categorie/create', [CategoriesController::class, "create"]);
Route::get('/categorie/{categorie}', [CategoriesController::class, 'show']);
Route::get('/categorie/{categorie}/edite', [CategoriesController::class, 'edit']);

// Komentāru sadaļa
Route::delete('/comments/{comment}', [CommentController::class, 'destroy']);
Route::post('/comments', [CommentController::class, 'store']);

