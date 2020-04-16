<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Shop;
use App\Article;

class CartsController extends Controller
{
    public function index()
    {
        $carts = Shop::All();
        $total = 0;

        foreach($carts as $cart) {
            $total += $cart->article->prix;
        }

        return view('cart.index', ['carts' => $carts, 'total' => $total] );
    }

    public function check(Request $request)
    {        
        $cart = Shop::All();

        return view('cart.check', ['cart' => $cart])->withInfo('L article à été créé !');
    }

    public function update(Request $request)
    {
        $carts = Shop::All();

        $request->validate([
            'email' => 'required',
            'adresse' => 'required',
            'numero' => 'required',
            'ville' => 'required',
            'pays' => 'required',
            'telephone' => 'required',
        ]);

        $mail =  $request->input('email');
        $adresse = $request->input('adresse');
        $numero = $request->input('numero');
        $ville = $request->input('ville');
        $pays = $request->input('pays');
        $telephone = $request->input('telephone');
        
        $total = "";
        foreach($carts as $cart) {
            $total .= $cart->article->title;
        }

        $subject = "Confirmation de la commande";
        $message = "Votre commande des articles suivant : " . $total . ". Vous les receverer dans une semaine à l'adresse." . $numero . " " . $adresse . "à" . $ville . " en " . $pays . ". Si vous n'etes pas la lors de la reception on vous contactera au " . $telephone;

        mail($mail,$subject,$message,[],"");

        return view('cart.mail', ['mail' => $mail, 'adresse' => $mail, 'numero' => $numero, 'telephone' => $telephone, 'ville' => $ville, 'pays' => $pays])->withInfo('Commande validé !');
    }

    public function alldelete()
    {
        $carts = Shop::all();
        foreach($carts as $cart) {
            $cart->delete();
        }
        return redirect('/cart')->withInfo('Article delete');
    }

    public function delete($id)
    {
        $cart = Shop::find($id);
        $cart->delete();
        return redirect('/cart')->withInfo('Article delete');
    }

    public function add($id)
    {
        $cart = New Shop;
        $cart->id_article = $id;

        $cart->save();

        return back()->withInfo('L article à été ajouté !');
    }
}
