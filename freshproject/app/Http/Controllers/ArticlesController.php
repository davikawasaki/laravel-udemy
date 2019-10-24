<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;

class ArticlesController extends Controller
{
    public function index()
    {
        $articles = Article::latest()->get();
        return view('articles.index', ['articles' => $articles]);
    }

    public function show(Article $article)
    {
        // $article = Article::findOrFail($id);
        return view('articles.show', ['article' => $article]);
    }

    public function create()
    {
        return view('articles.create');
    }

    public function store()
    {
        // dd(request()->all());
        $validatedAttributes = $this->validateArticle();

        // $article = Article::create([
        //     'title' => request('title'),
        //     'excerpt' => request('excerpt'),
        //     'body' => request('body')
        // ]);
        $article = Article::create($validatedAttributes);
        $article->save();

        return redirect(route('articles.index'));
    }

    public function edit($Article)
    {
        // $article = Article::findOrFail($id);

        // find the articled associated with the ID
        return view('articles.edit', compact('article'));
    }

    public function update(Article $article)
    {
        // Use only if an id is being sent through params
        // $article = Article::findOrFail($id);
        
        $article->update($this->validateArticle());
        $article->save();

        // return redirect('/articles/' . $article->id);
        // return redirect(route('articles.show', $article));
        return redirect($article->path());
    }

    public function validateArticle()
    {
        return request()->validate([
            // 'title' => 'required|min:3',
            'title' => ['required', 'min:3', 'max:255'],
            'excerpt' => 'required',
            'body' => 'required'
        ]);
    }
}
