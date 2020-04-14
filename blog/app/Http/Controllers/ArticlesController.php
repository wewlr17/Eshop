<?php

namespace App\Http\Controllers;

use App\Article;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class ArticlesController extends Controller
{
    public function __construct()
    {

        // $user = User::find(Auth::id());
        // if ($user->role_user == 'admin')
        //$this->middleware('auth');
    }

    public function delete($id)
    {
        if (!$this->isAdmin())
            return redirect('home');

        $article = Article::find($id);
        $article->delete();

        return redirect('/article/adminlist')->withInfo('Article delete');
    }

    public function edit($id)
    {
        $article = Article::find($id);

        return view('article.edit', ['article' => Article::findOrFail($id)]);
    }

    public function adminlist()
    {
        if (!$this->isAdmin())
            return redirect('home');

        $articles = Article::All();
        return view('article.adminlist', compact('articles'));

        // if (Auth::check() && $user->role_user == 'admin') {  

    }

    public function update(Request $request, $id)
    {
        if (!$this->isAdmin())
            return redirect('home');

        $article = Article::find($id);

        $article->title = $request->input('title');
        $article->description_article = $request->input('description_article');
        $article->prix = $request->input('prix');
        $article->materiel = $request->input('materiel');
        $article->marque = $request->input('marque');
        $article->couleur = $request->input('couleur');
        $article->taille = $request->input('taille');
        $article->livraison = $request->input('livraison');

        $article->save();

        return redirect('article/adminlist')->withInfo('Article mis à jour !');
    }

    public function create()
    {
        if (!$this->isAdmin())
            return redirect('home');

        return view('article.createArticle');
    }

    public function store(Request $request)
    {        
        $article = New Article;

        $article->title = $request->title;
        if ($request->file('input_img')) {
            $file = $request->file('input_img');
            $filename = time().'.'.$file->getClientOriginalExtension();
            $location = public_path('/images');
            $file->move($location, $filename);
            $user->img_profile = $filename;
        }
        $article->img_article = '/image_article' + $request->img_article;
        $article->description_article = $request->description_article;
        $article->prix = $request->prix;

        $article->save();

        return back()->withInfo('L article à été créé !');

    }

    public function isAdmin()
    {
        $user = Auth::user();
        
        return (Auth::check() && $user->role_user === 'admin');  
    }
}
