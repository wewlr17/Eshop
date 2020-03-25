@extends('layouts.app')
@section('title','Forum')
@section('content')
<?php 
$iPod    = stripos($_SERVER['HTTP_USER_AGENT'],"iPod");
$iPhone  = stripos($_SERVER['HTTP_USER_AGENT'],"iPhone");
$iPad    = stripos($_SERVER['HTTP_USER_AGENT'],"iPad");
$Android = stripos($_SERVER['HTTP_USER_AGENT'],"Android");
$webOS   = stripos($_SERVER['HTTP_USER_AGENT'],"webOS");
?>

<div class="container animated fadeInLeft">
  <div class="jumbotron" id="tc_jumbotron" style="background-color: grey">
        <div class="text-center"> 
          <h1 style="color: white; margin-bottom: -60px; margin-top: -50px ;font-size: 2.5rem;"><br>Nouvelle</h1> 
          <h2 style="color: white    ;font-size: 3.5rem;"><br>Collection</h2> 
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
                <div class="col-sm-3" style="margin-bottom: 50px;">
                  <a href="/forum/1" style="width:100%" class="btn btn-primary">
                  <h5 class="card-title">Card title</h5>
                  <img class="card-img-top" src="{{asset('images/produit3.png')}}" alt="Card image cap"></a>
                </div>
                <div class="col-sm-3" style="margin-bottom: 50px;">
                  <a href="#" style="width:100%" class="btn btn-primary">
                  <h5 class="card-title">Card title</h5>
                  <img class="card-img-top" src="{{asset('images/produit4.png')}}" alt="Card image cap"></a>
                </div>
                <div class="col-sm-3" style="margin-bottom: 50px; ">
                  <a href="#" style="width:100%" class="btn btn-primary">
                  <h5 class="card-title">Card title</h5>
                  <img class="card-img-top" src="{{asset('images/produit5.png')}}" alt="Card image cap"></a>
                </div>
                <div class="col-sm-3" style="wmargin-bottom: 50px;">
                  <a href="#" style="width:100%" class="btn btn-primary">
                  <h5 class="card-title">Card title</h5>
                  <img class="card-img-top" src="{{asset('images/suit.png')}}" alt="Card image cap"></a>
                </div>
                <div class="col-sm-3" style="wmargin-bottom: 50px;">
                  <a href="#" style="width:100%" class="btn btn-primary">
                  <h5 class="card-title">Card title</h5>
                  <img class="card-img-top" src="{{asset('images/suit.png')}}" alt="Card image cap"></a>
                </div>
                <div class="col-sm-3" style="wmargin-bottom: 50px;">
                  <a href="#" style="width:100%" class="btn btn-primary">
                  <h5 class="card-title">Card title</h5>
                  <img class="card-img-top" src="{{asset('images/suit.png')}}" alt="Card image cap"></a>
                </div>
                <div class="col-sm-3" style="margin-bottom: 50px;">
                  <a href="#" style="width:100%" class="btn btn-primary">
                  <h5 class="card-title">Card title</h5>
                  <img class="card-img-top" src="{{asset('images/produit3.png')}}" alt="Card image cap"></a>
                </div>
                <div class="col-sm-3" style="margin-bottom: 50px;">
                  <a href="#" style="width:100%" class="btn btn-primary">
                  <h5 class="card-title">Card title</h5>
                  <img class="card-img-top" src="{{asset('images/produit4.png')}}" alt="Card image cap"></a>
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

@endsection
 