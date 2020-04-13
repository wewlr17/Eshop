@extends('layouts.app')
@section('content')
<link href="{{ asset('css/button_show.css') }}" rel="stylesheet">

<a href="/article/adminlist">
<div style="margin-left: 30%; margin-top: 100px; margin-bottom: 50px" class="buttons">
    <button style="float : left; width: 25%" class="blob-btn">
    <p class="text">
        Articles
    </p>
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
</div>
</a>

<a href="/article/categories">
<div class="button3" style="margin-right: 200px; margin-top: -100px;  ;margin-bottom: 50px" class="buttons">
    <button style="float : right; right: 15%; width: 25%" class="blob-btn">
    <p class="text">
        Categories
    </p>
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
</div>
</a>

<a href="/collection/collectionlist">
<div class="button3" style="margin-right: 200px; margin-top: 100px;" class="buttons">
    <button style="float : right; right: 15%; width: 25%" class="blob-btn">
    <p class="text">
        Collection
    </p>
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
</div>
</a>

<a href="/user/userlist">
<div class="button2" style="margin-left: 30%; margin-top: -200px; margin-bottom: 400px" class="buttons">
    <button style="float : left; width: 25%" class="blob-btn">
    <p class="text">
        Utilisateurs
    </p>
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
</div>
</a>

@endsection