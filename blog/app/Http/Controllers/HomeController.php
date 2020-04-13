<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\collection;
use App\CollectionArticle;


class HomeController extends Controller
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
        $collections = CollectionArticle::all();

        return view('welcome', compact('collections'));
    }
}
