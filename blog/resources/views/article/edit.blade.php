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
          <h1 style="color: white; margin-bottom: -60px; margin-top: -50px ;font-size: 2.5rem;"><br>Titre : </h1> 
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

                <div style="margin-left: 400px; margin-top: -350px">
                <form action="{{route('article.update', $article->id)}}" method="post">
                    @csrf

                    <div class="form-group">
                        <p style="font-size: 1.0rem;">Titre :  <p>    
                        <input style="width: 40%" type="text" id="tc_input" class="form-control" name="title" value="{{$article->title}}"> 
                    </div>
                    <div class="form-group">
                        <p style="font-size: 1.0rem;">Prix :  <p>    
                        <input style="width: 40%" type="text" id="tc_input" class="form-control" name="prix" value="{{$article->prix}}"> 
                    </div>

                    <hr>
                    <div class="form-group">
                        <p style="font-size: 1.0rem;">Description :  <p>    
                        <input style="width: 100%; height: 100px" type="text" id="tc_input" class="form-control" name="description_article" value="{{$article->description_article}}"> 
                    </div>

                    <hr><p>
                    <div class="row">
                        <div class="col-sm-4">    
                            <p style="font-size: 1.0rem;">Materiel :  <p>    
                            <input style="width: 100%" type="text" id="tc_input" class="form-control" name="materiel" value="{{$article->materiel}}"> 
                        </div>
                        <div class="col-sm-4">  
                            <p style="font-size: 1.0rem;">Marque :  <p>    
                            <input style="width: 100%" type="text" id="tc_input" class="form-control" name="marque" value="{{$article->marque}}"> 
                        </div>
                            <div class="col-sm-4">                         
                            <p style="font-size: 1.0rem;">Couleur :  <p>    
                        <input style="width: 100%" type="text" id="tc_input" class="form-control" name="couleur" value="{{$article->couleur}}"> 
                        </div>                    
                    </div>
                    <div class="row">
                        <div class="col-sm-6"> 
                            <p style="font-size: 1.0rem;">Taille :  <p>    
                            <input style="width: 100%" type="text" id="tc_input" class="form-control" name="taille" value="{{$article->taille}}"> 
                        </div>
                        <div class="col-sm-6">
                            <p style="font-size: 1.0rem;">Livraison :  <p>    
                            <input style="width: 100%" type="text" id="tc_input" class="form-control" name="livraison" value="{{$article->livraison}}"> 
                        </div>

                    </div>


                        <div style="margin-right: 40%; margin-top: 50px;" class="buttons">
                    <button style="margin-left : 0%; width: 100%" class="blob-btn" type="submit">
                        Enregistrer
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








                    <!-- <button style="background-color:black" type="submit" class="btn btn-success btn-block">Enregistrer</button> -->
               </form>
                </div> 

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
 