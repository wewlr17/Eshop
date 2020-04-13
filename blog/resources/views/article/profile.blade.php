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

                <div style="margin-left: 400px; margin-top: -0px">
                <form action="{{route('user.update', $user->id)}}" method="post">
                    @csrf

                    <div class="" style="margin-bottom: 50px; width:100%; left: 0">
                        <img class="card-img-top" style="width: 30%" src="{{asset('images/'.$user->img_profile)}}" alt="Card image cap">
                        <a style="margin-left: 35%;" data-toggle="collapse" data-target="#edit_image"><i class="fa fa-image" id="upload_image"></i></a>
                    </div>
                    <div id="edit_image" class="collapse">  
                        <div class="bg">
                            <div class="form-group">
                              <input type="file" class="form-control" name="input_img" placeholder="input_img" style="background-color: #f5f8fa;"> 
                            </div>
                            </div>  
                            @if (empty($user->img_profile))
                              <small><i class="fa fa-info-circle"></i>Veuillez à choisir une image</small>
                            @else
                            <div class="form-group">
                               <div class="col-md-4"> 
                               <img src="{{asset('images/'.$user->img_profile)}}" alt="" width="100%">
                               </div>
                           </div>
                           @endif
                    </div>

                    <div class="row">
                        <div class="col-sm-6"> 
                            <p style="font-size: 1.0rem;">Email :  <p>    
                            <input  type="text" id="tc_input" class="form-control" name="email" value="{{$user->email}}"> 
                        </div>
                        <div class="col-sm-6">    
                            <p style="font-size: 1.0rem;">Pseudo :  <p>    
                            <input type="text" id="tc_input" class="form-control" name="name" value="{{$user->name}}"> 
                        </div>

                    </div>

                    <hr>

                    <div class="form-group">
                        <p style="font-size: 1.0rem;">Role :  <p>    
                        <input style="width: 100%" type="text" id="tc_input" class="form-control" name="role_user" value="{{$user->role_user}}"> 
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
 