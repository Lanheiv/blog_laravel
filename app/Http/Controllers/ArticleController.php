<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class ArticleController extends Controller
{
    public function index()
    {
        $article = Article::all();
        return view("article.index", compact("article"));
    }
    public function create()
    {
        return view("article.create");
    }
    public function store(Request $request)
    {
        //
    }
    public function show(c $c)
    {
        //
    }
    public function edit(c $c)
    {
        //
    }
    public function update(Request $request, c $c)
    {
        //
    }
    public function destroy(c $c)
    {
        //
    }
}
