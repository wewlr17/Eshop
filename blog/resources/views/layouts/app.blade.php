<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>E SHOP | @yield('title')</title>
 
    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">  
    <link href="{{ asset('css/style.css') }}" rel="stylesheet"> 
    <link href="{{ asset('css/select2.min.css') }}" rel="stylesheet">
    <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.0.12/dist/css/select2.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">

    
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/froala-editor@3.0.0-beta.0/css/froala_editor.css">
    
    <style>
        .badge{
            background: white;
            width: auto;
            height: auto;
            margin: 0;
            border-radius: 50%;
            position:absolute;
            top:-13px;
            right:-8px;
            padding:5px;
            
        }

    </style>

    <?php 
        $iPod    = stripos($_SERVER['HTTP_USER_AGENT'],"iPod");
        $iPhone  = stripos($_SERVER['HTTP_USER_AGENT'],"iPhone");
        $iPad    = stripos($_SERVER['HTTP_USER_AGENT'],"iPad");
        $Android = stripos($_SERVER['HTTP_USER_AGENT'],"Android");
        $webOS   = stripos($_SERVER['HTTP_USER_AGENT'],"webOS");
    ?>

</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel animated fadeInDown" style=" background-color: #010101; z-index: 1">
            <div class="container" id="nav_ul">
            @if ( $_SERVER['PHP_SELF'] = "/index.php/user/")
            @guest
            <a class="navbar-brand" href="{{ url('/home') }}" style="">
            @else
            @if (Auth::user()->image !== null)
                <a class="navbar-brand" href="{{ url('/home') }}" style="margin-left: 5px; margin-top: 2px">
                <img src="{{asset('images/' .Auth::user()->image)}}" style="background: #fff; border: 3px solid #f5f8fa; width: 40px; border-radius: 50%; height: 40px; margin-right: 10px">
            @else
            <a class="navbar-brand" href="{{ url('/home') }}" style="margin-right: -150px">
            @endif 
            @endguest
            @endif
            @guest
                <img src="{{asset('images/eshop.png')}}" style="background: #fff; border: 3px solid #f5f8fa; width: 5%; border-radius: 50%; height: 28%;">
            @else

            @endguest
                </a>
                @if ($iPad | $iPod | $iPhone | $Android)
                <button style="margin-left: 88%; margin-top: -50px" class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                @else
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                @endif
                    <span class="navbar-toggler-icon"></span>
                </button> 
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    @guest

                    <ul class="navbar-nav mr-auto" id="nav_ul">
                    @else
                    @if ($iPad | $iPod | $iPhone | $Android)    
                    <ul style="margin-left: -0px" class="navbar-nav mr-auto" id="nav_ul">
                    @else
                    <ul style="margin-left: -10px" class="navbar-nav mr-auto" id="nav_ul">
                    @endif
                    @endguest

                   </ul> 
                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto" id="nav_ul"> 
             <!-- Authentication Links -->
                  @guest
                    <li ><a class="nav-link" id="b" href="{{ route('login') }}">{{ __('Login') }}</a></li>
                    <li><a class="nav-link" id="b" href="{{ route('register') }}">{{ __('Register') }}</a></li>
                  @else
                    <span class="input-group-btn" style="padding: 5px; margin-right: 11px;">
                    <button onclick="window.location.href='/forum'"  class="btn btn-tc" type="button" ><i class="fa fa-star"></i> </button>
                    <button onclick="window.location.href='/chat'" class="btn btn-tc" type="button" ><i class="fa fa-inbox"></i>   <span style="margin-right: 5px" class="badge">{{ $notif ?? '' }}</span></button>
                  </span>
                  <li class="nav-item dropdown">
                        @if ( Auth::user()->role_user == "admin")
                            <a  class="nav-link " href="/admin" >
                                Admin <span class="caret"></span>
                            </a>

                        @endif
                    </li>
                        <li class="nav-item dropdown">
                    
                            </li>
                        
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>
                                <div class="dropdown-menu"  aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();" style="color: #444;">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            <div class="container">
                @include('layouts.info')
            </div>
            @yield('content')

            @include('layouts.footer')
 
        </main>
    </div>

    <!-- Script -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
    <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
    <script type="text/javascript" src="/ckeditor/ckeditor.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.0.12/dist/js/select2.min.js"></script>
    
    
    @yield('js')

</body>
</html>