<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;


Route::get('/', function () {
    return view('index');
});
Route::get('/article', [ArticleController::class, "index"]);
