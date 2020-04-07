<?php

namespace App\Http\Controllers;

use App\Article;
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
        //$article = Article::where('id', $slug);
        //$article = DB::select('select * from article where id = ?', [$slug]);

        return view('forum.show', ['article' => Article::findOrFail($id)]);
    }
}