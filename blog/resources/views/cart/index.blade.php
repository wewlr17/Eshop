@extends('layouts.app')
@section('title',"Show categorie")
@section('content')
<link href="{{ asset('css/button_show.css') }}" rel="stylesheet">
<?php 
$iPod    = stripos($_SERVER['HTTP_USER_AGENT'],"iPod");
$iPhone  = stripos($_SERVER['HTTP_USER_AGENT'],"iPhone");
$iPad    = stripos($_SERVER['HTTP_USER_AGENT'],"iPad");
$Android = stripos($_SERVER['HTTP_USER_AGENT'],"Android");
$webOS   = stripos($_SERVER['HTTP_USER_AGENT'],"webOS");
?>

<div class="container animated fadeInLeft">
  <div class="jumbotron" id="tc_jumbotron">
        <div class="text-center"> 
          <h1 style="color: white; margin-bottom: -60px; margin-top: -50px ;font-size: 2.5rem;"><br>Shopping </h1> 
          <h2 style="color: white    ;font-size: 3.5rem;"><br></h2> 
        <p></p>  
          </div>
      </div> 
    </div>
    @if($iPhone || $iPod || $iPad || $Android)

            @else
            @endif

            <div class="container animated fadeInRight"> 
              <div class="row">

               <div class="row" style="" >

               <a href="/forum" class="btn btn-primary" style="margin: 30px">Continuer la commande</a>                          
                <div style="margin-left: 10%; width: 100%">

                    @foreach($carts as $cart)


                        <div class="col-sm-6" style="margin-bottom: 50px;">
                          <a href="{{ route('forum.show', $cart->id_article) }}" class="btn btn-primary">
                          <img class="card-img-top" src="{{asset($cart->article->img_article)}}" alt="Card image cap"></a>
                        </div>
                        <div class="col-sm-6" style="float: right; margin-top: -250px">
                          <h2>{{$cart->article->title}}</h2>
                          <p>{{$cart->article->description_article}} </p>
                          <h3>{{$cart->article->prix}} €</h3>
                          <a href="{{route('carts.delete', $cart->id_article)}}" >
                            <button type="submit" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i> Delete</button>
                          </a>
                        </div>

                  @endforeach
                    <div style="float: right;">
                      <h3>{{$total}} €</h3>
                    </div>

                    <a href="{{route('cart.alldelete')}}" >
                      <button type="submit" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i> Delete</button>
                    </a>

                    <a href="{{route('cart.check')}}" class="btn btn-primary" style="margin: 30px">Valider</a>    
                </div>
            @if ($iPhone || $iPod || $iPad || $Android)
              @else
              </div>
            @endif

                </div>
                
            </div>
          </div>
        </div>
    </div>
</div><br><br>

<svg xmlns="http://www.w3.org/2000/svg" version="1.1">
  <defs>
    <filter id="goo">
      <feGaussianBlur in="SourceGraphic" result="blur" stdDeviation="10"></feGaussianBlur>
      <feColorMatrix in="blur" mode="matrix" values="1 0 0 0 0 0 1 0 0 0 0 0 1 0 0 0 0 0 21 -7" result="goo"></feColorMatrix>
      <feBlend in2="goo" in="SourceGraphic" result="mix"></feBlend>
    </filter>
  </defs>
</svg>
@endsection
 