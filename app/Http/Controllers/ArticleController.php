<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categories;
use App\Models\Article;

class ArticleController extends Controller
{
    public function index()
    {
        $article = Article::all();
        return view("article.index", compact("article"));
    }
    public function create() {
        $categories = Categories::all();
        return view("article.create", compact("categories"));
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
    public function edit(Article $article) {
        $categories = Categories::all();

        return view("article.edit", compact("article"), compact("categories"));
    }
    public function update(Request $request, Article $article) {
        $validated = $request->validate([
            "title" => ["required", "max:20"],
            "content" => ["required"],
            "category_id" => ["required"]
        ]);
        $article->update([
            "title" => $validated["title"],
            "content" => $validated["content"],
            "category_id" => $validated["category_id"]
        ]);

        return view("article.show", compact("article"));
    }
    public function destroy(Article $article) {
        $article->delete();

        return redirect("/article");
    }
}

