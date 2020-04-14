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
          <h1 style="color: white; margin-bottom: -60px; margin-top: -50px ;font-size: 2.5rem;"><br>Creer un Article </h1> 
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

                <div style="margin-left: 450px; margin-bottom: -150px">
                <form action="{{route('article.store')}}" method="post">
                    @csrf

                    <div class="form-group">
                        <p style="font-size: 1.0rem;">Titre :  <p>    
                        <input style="width: 100%" type="text" id="tc_input" class="form-control" name="title" placeholder="Entrer le titre..."> 
                    </div>
                    <div class="" style="margin-bottom: 50px; width:100%; left: 0">
                        <img class="card-img-top" style="width: 30%" src="{{asset('images/')}}" alt="Card image cap">
                        <a style="margin-left: 35%;" data-toggle="collapse" data-target="#edit_image"><i class="fa fa-image" id="upload_image"></i></a>
                    </div>
                    <div id="edit_image" class="collapse">  
                        <div class="bg">
                            <div class="form-group">
                              <input type="file" class="form-control" name="img_article" placeholder="input_img" style="background-color: #f5f8fa;"> 
                            </div>
                            </div>  
                            @if (empty($article->img_article))
                              <small><i class="fa fa-info-circle"></i>Veuillez à choisir une image</small>
                            @endif
                    </div>
                    <div class="form-group">
                        <p style="font-size: 1.0rem;">Description :  <p>    
                        <input style="width: 100%" type="text" id="tc_input" class="form-control" name="description_article" placeholder="Entrer la description..."> 
                    </div>
                    <div class="form-group">
                        <p style="font-size: 1.0rem;">Prix :  <p>    
                        <input style="width: 100%" type="text" id="tc_input" class="form-control" name="prix" placeholder="Entrer le prix..."> 
                    </div>

                    <hr>

                        <div style="margin-right: 40%; margin-top: 50px;" class="buttons">
                    <button style="margin-left : 0%; width: 300px" class="blob-btn" type="submit">
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

               </form>
 
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
 