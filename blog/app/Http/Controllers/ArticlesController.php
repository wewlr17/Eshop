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
        $user = User::find(Auth::id());
        if ($user == 'admin')
            $this->middleware('auth');
    }

    public function delete($id)
    {
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
        $articles = Article::All();

        return view('article.adminlist', compact('articles'));
    }

    public function update(Request $request, $id)
    {
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
}
