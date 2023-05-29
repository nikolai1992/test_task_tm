<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    //
    public function index()
    {
        $articles = Article::paginate(9);

        return view('home', compact('articles'));
    }

    public function read(Request $request)
    {
        $id = $request->id;
        $article = Article::findOrFail($id);

        return view('article', compact('article'));
    }
}
