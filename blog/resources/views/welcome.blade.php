@extends('layouts.app')
@section('title','Homepage')
@section('content')
<div class="container" style="width: 50%">
  <div class="jumbotron" id="tc_jumbotron" style="background-color: ">
    <div class="card-body">
      <div class="text-center" style="color :white"> 
           <h1>Bienvenue</h1> 
           <div class="footer_sosial">
              <a href=""><i style="color: white" class="fa fa-facebook"></i></a>
              <a href=""><i style="color: white" class="fa fa-instagram"></i></a>
              <a href=""><i style="color: white" class="fa fa-youtube"></i></a>
          </div> 
          <a href="/forum">
          <img src="{{asset('images/welcom.png')}}" style="width: 50%; border-radius: 50%; height: 25%;">   
          </a>     
      </div>
    </div>
  </div>

  <div class="row" >
    <div class="col-sm-6" style="margin-bottom: 50px;">
      <a href="{{ route('forum.index') }}" class="btn btn-primary">
      <h5 class="card-title">Categorie 1</h5>
      <img class="card-img-top" src="{{asset('images/produit.png')}}" alt="Card image cap"></a>
    </div>
    <div class="col-sm-6" style="margin-bottom: 50px">
      <a href="{{ route('forum.index') }}" class="btn btn-primary">
      <h5 class="card-title">Categorie 2</h5>
      <img class="card-img-top" src="{{asset('images/produit2.png')}}" alt="Card image cap"></a>
    </div>
  </div>

  <div class="row" style="" >
    <div class="col-sm-3" style="margin-bottom: 50px;">
      <a href="{{ route('forum.show', 1) }}" style="width:100%" class="btn btn-primary">
      <h5 class="card-title">Card</h5>
      <img class="card-img-top" src="{{asset('images/produit3.png')}}" alt="Card image cap"></a>
    </div>
    <div class="col-sm-3" style="margin-bottom: 50px;">
      <a href="{{ route('forum.show', 2) }}" style="width:100%" class="btn btn-primary">
      <h5 class="card-title">Card title</h5>
      <img class="card-img-top" src="{{asset('images/produit4.png')}}" alt="Card image cap"></a>
    </div>
    <div class="col-sm-3" style="margin-bottom: 50px; ">
      <a href="{{ route('forum.show', 3) }}" style="width:100%" class="btn btn-primary">
      <h5 class="card-title">Card title</h5>
      <img class="card-img-top" src="{{asset('images/produit5.png')}}" alt="Card image cap"></a>
    </div>
    <div class="col-sm-3" style="wmargin-bottom: 50px;">
      <a href="{{ route('forum.show', 4) }}" style="width:100%" class="btn btn-primary">
      <h5 class="card-title">Card title</h5>
      <img class="card-img-top" src="{{asset('images/suit.png')}}" alt="Card image cap"></a>
    </div>
  </div>
  


</div>  
<div style="width: 50%" class="container"> 
    <div class="row">
        <div class="col-md-12" id="tc_container_wrap">
        </div>
    </div>
</div>
@endsection
 