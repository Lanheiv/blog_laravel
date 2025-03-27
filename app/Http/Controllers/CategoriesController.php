<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categories;

class CategoriesController extends Controller
{
    public function index() {
        $categories = Categories::all();
        return view("categories.index", compact("categories"));
    }
    public function create()
    {
        return view("categories.create");
    }
    public function store(Request $request) {
        $validated = $request->validate([
            "category_name" => ["required", "max:20"],
            "details" => ["required"]
        ]);
        
        Categories::create([
            "category_name" => $validated["category_name"],
            "details" => $validated["details"],
            "created_at" => now(),
            "updated_at" => now()
        ]);

        return redirect("/categorie");
    }
    public function show(Categories $categorie) {
        return view("categories.show", compact("categorie"));
    }
    public function edit(Categories $categorie) {
        return view("categories.edit", compact("categorie"));
    }
    public function update(Request $request, Categories $categorie) {
        $validated = $request->validate([
            "category_name" => ["required"],
            "details" => ["required"]
        ]);

        $categorie->update([
            "category_name" => $validated["category_name"],
            "details" => $validated["details"]
        ]);

        return view("categories.show", compact("categorie"));
    }
    public function destroy(Categories $categorie) {
        $categorie->delete();

        return redirect("/categorie");
    }
}