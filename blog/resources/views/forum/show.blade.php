@extends('layouts.app')
@section('title',"Show article")
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
          <h1 style="color: white; margin-bottom: -60px; margin-top: -50px ;font-size: 2.5rem;"><br>{{$article->title}}</h1> 
          <h2 style="color: white    ;font-size: 3.5rem;"><br></h2> 
        <p></p>  
          </div>
      </div> 
    </div>
    @if($iPhone || $iPod || $iPad || $Android)
    
            @else
            @endif

            @if ($iPhone || $iPod || $iPad || $Android)
            <div style="margin-top: -70px" class="container animated fadeInRight"> 
              @else
              <div class="container animated fadeInRight"> 
              <div class="row">
             <div class="col-md-12" id="tc_container_wrap">
            @endif
            <div class="card" id="tc_paneldefault"> 
                <div class="card-body" id="tc_panelbody"  style="background: #f9f9f9;">  
               <div class="row">
               @if ($iPhone || $iPod || $iPad || $Android)
              @else
              <div style="padding-right: 0;"><br>
               @endif
               <div class="row" style="" >
                <div class="" style="margin-bottom: 50px; width: 300px; margin-left: 50px">
                  <img class="card-img-top" src="{{$article->img_article}}" alt="Card image cap"></a>
                </div>

                <div style="margin-left: 450px; margin-top: -300px">
                  <h2>Article</h2>
                  <p style="float: right; margin-top: -55px; margin-left: 400px; font-size: 2.5rem;">{{$article->prix}} €<p>
                  <hr>
                  <p>{{$article->description_article}}<br><hr><p>
                  <dl style="margin-left: 0px; margin-top: 0px;">
                    <li>
                    Materiel : {{$article->materiel}}
                    </li>
                    <li>
                    Marque : {{$article->marque}} 
                    </li>

                    </li>
                    <li>
                    Couleur : {{$article->couleur}}
                    </li>
                    <li>
                    Taille : {{$article->taille}}
                    </li>
                    <li>
                    Livraison : {{$article->livraison}}
                    </li>
                  
                  
                  </dl>
                </div> 

                <div style="margin-right: -100px; margin-top: -150px; width: 80px" class="buttons">
                  <a href="{{route('carts.add', $article->id)}}"><button style="margin-left : -90px" class="blob-btn">
                    Ajouter
                    <span class="blob-btn__inner">
                      <span class="blob-btn__blobs">
                        <span class="blob-btn__blob"></span>
                        <span class="blob-btn__blob"></span>
                        <span class="blob-btn__blob"></span>
                        <span class="blob-btn__blob"></span>
                      </span>
                    </span>
                  </button></a>
                  <br/>

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
 