<?php

namespace App\Http\Controllers;

use App\Article;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Http\Requests\ArticleRequest;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class ArticlesController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth', ['only' => 'create']);
    }
   



    public function index()
    {
    
        // get the authenticated user: return \Auth::user(); 


        $articles = Article::latest('published_at')->published()->get();

        return view('articles.index', compact('articles'));

    }




    public function show(Article $article)
    {
       // $article = Article::findOrFail($id); // no longer needed because we defined a route model in RouteServiceProvider

        $article['diffForHumans'] = $article->created_at->diffForHumans();

        return view('articles.show', compact('article'));

    }




    public function create()
    {

        return view('articles.create');
    }



    public function store(ArticleRequest $request)
    {

        // $this->validate($request, ['title' => 'required']); // simple validator

        $article = new Article($request->all());

        Auth::user()->articles()->save($article);

        \Session::flash('flash_message', 'Your article has been created'); //echivalent cu session()->flash('flash_message', 'Your article has been created');
        
        \Session::flash('flash_message_important', true); //echivalent cu session()->flash('flash_message', 'Your article has been created');

        return redirect('articles');
    }



    public function edit(Article $article)
    {
       // $article = Article::findOrFail($id); // no longer needed because we defined a route model in RouteServiceProvider

        return view('articles.edit', compact('article'));
    }



    public function update(Article $article, ArticleRequest $request)
    {
        // $article = Article::findOrFail($id); // no longer needed because we defined a route model in RouteServiceProvider

        $article->update($request->all());

        return redirect('articles');
    }

}
