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
        return view('forum.index');
    }
    public function show($slug)
    {
        $article = DB::select('select * from article where id = ?', [$slug]);
            
        return view('forum.show', compact('article'));
    }
}