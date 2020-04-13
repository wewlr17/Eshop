<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categorie;

class CategoriesController extends Controller
{
    public function categorielist()
    {
        $categories = Categorie::All();

        return view('article.categories', compact('categories'));
    }

    public function delete($id)
    {
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
        $categorie = Categorie::find($id);
        $categorie->titre = $request->input('titre');

        $categorie->save();

        return redirect('article/categories')->withInfo('Article mis à jour !');
    }

    public function create()
    {
        return view('article.createCategorie');
    }


    public function store(Request $request)
    {        
        $categorie = New Categorie;
        $categorie->titre = $request->titre;

        $categorie->save();

        return back()->withInfo('La categorie à été créé !');

    }


}
