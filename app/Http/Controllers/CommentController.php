<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;

class CommentController extends Controller
{
    public function store(Request $request) {
        $validated = $request->validate([
            "comment" => ["required"],
            "user" => ["required"],
            "article_id" => ["required"]
        ]);
        Comment::create([
            "comment" => $validated["comment"],
            "article_id" => $validated["article_id"],
            "user_id" => $validated["user"]
        ]);

        return redirect("/article/{$validated['article_id']}");
    }
    public function destroy(Comment $comment) {
        $path = $comment["article_id"];
        $comment->delete();

        return redirect("/article/{$path}");
    }
}