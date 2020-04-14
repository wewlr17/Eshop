<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categorie;

class CategoriesController extends Controller
{
    public function categorielist()
    {
        if (!$this->isAdmin())
            return redirect('home');

        $categories = Categorie::All();

        return view('article.categories', compact('categories'));
    }

    public function delete($id)
    {
        if (!$this->isAdmin())
            return redirect('home');

        $categorie = Categorie::find($id);
        $categorie->delete();
        return redirect('/article/categories')->withInfo('Categorie delete');
    }

    public function edit($id)
    {
        $categorie = Categorie::find($id);

        return view('article.categorieEdit', ['categorie' => Categorie::findOrFail($id)]);
    }

    public function update(Request $request, $id)
    {  
        if (!$this->isAdmin())
            return redirect('home');

        $categorie = Categorie::find($id);
        $categorie->titre = $request->input('titre');

        $categorie->save();

        return redirect('article/categories')->withInfo('Article mis à jour !');
    }

    public function create()
    {
        if (!$this->isAdmin())
            return redirect('home');

            return view('article.createCategorie');
    }

    public function store(Request $request)
    {    
        if (!$this->isAdmin())
            return redirect('home');  
  
        $categorie = New Categorie;
        $categorie->titre = $request->titre;

        $categorie->save();

        return back()->withInfo('La categorie à été créé !');

    }

    public function isAdmin()
    {
        $user = Auth::user();
        
        return (Auth::check() && $user->role_user === 'admin');  
    }

}
