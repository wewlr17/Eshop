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

               <a href="/" class="btn btn-primary" style="margin: 30px">Revenir sur la commande</a>                          
                <div style="margin-left: 60%; width: 100%">

                    <h2> Votre commande à été validé </h2>

                    <p>Vous aller recevoir un mail à l'adresse suivante : {{$mail}} <p>










                    <a href="/forum" style="margin: 30px">                          
                        <div style="margin-right: 40%; margin-top: 50px;" class="buttons">
                        <button style="margin-left : 0%; width: 300px" class="blob-btn" type="submit">
                        Retour a l'accueil
                        <span class="blob-btn__inner">
                        <span class="blob-btn__blobs">
                            <span class="blob-btn__blob"></span>
                            <span class="blob-btn__blob"></span>
                            <span class="blob-btn__blob"></span>
                            <span class="blob-btn__blob"></span>
                        </span>
                        </span>
                        </button>
                        <br/>
                    </a>








                    <!-- <a href="{{route('cart.check')}}" class="btn btn-primary" style="margin: 30px">Valider</a>     -->
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
 