<?php

namespace App\Http\Controllers;

use App\Article;
use App\Categorie;
use App\CollectionArticle;
use DB;
use Illuminate\Http\Request;
use PDO;

class CollectionController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    
    public function index()
    {
        $forum = Article::All();
        return view('forum.index', ['articles' => $forum]);
    }
    public function show($id)
    {
        return view('forum.show', ['article' => Article::findOrFail($id)]);
    }

    public function filtre($id)
    {
        $categorie = Categorie::findOrFail($id);
        $forum = Article::All();

        return view('forum.categorie', ['articles' => $forum], ['collection' => $categorie]);
    }

    public function collectionlist()
    {
        $collections = CollectionArticle::All();

        return view('article.collection', ['collections' => $collections]);
    }
 
    public function delete($id)
    {
        $collection = CollectionArticle::find($id);
        $collection->delete();
        return redirect('/collection/collectionlist')->withInfo('Collection delete');
    }

    public function edit($id)
    {
        $collection = CollectionArticle::find($id);
        $categorie = Categorie::findOrFail($id);

        return view('article.collectionEdit', ['categorie' => $categorie], ['collection' => $collection]);
    }

}