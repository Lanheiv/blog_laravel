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
    public function create() {
        return view("article.create");
    }
    public function store(Request $request) {
        $validated = $request->validate([
            "title" => ["required", "max:20"],
            "content" => ["required"],
            "category_id" => ["nullable", "integer"]
        ]);
        Article::create([
            "title" => $validated["title"],
            "content" => $validated["content"],
            "category_id" => $validated["category_id"] ?? 0
        ]);

        return redirect("/article");
    }
    public function show(Article $article) {
        return view("article.show", compact("article"));
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

