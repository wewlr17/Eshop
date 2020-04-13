@extends('layouts.app')


@section('content')

Coucou liste des article pour l'admin


<table class="table">
    <tr>
        <th>id</th>
        <th>title</th>
        <th>image</th>
        <th>action</th>
    </tr>

@foreach($articles as $article)
    <tr>
        <td>{{$article->id}}</td>
        <td>{{$article->title}}</td>
        <td>
            <img class="small-image" src="{{asset($article->img_article)}}" alt="{{$article->title}}"></a>
        <td>
        <td>
            <a href="{{route('article.delete', $article->id)}}" >
            <button type="submit" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i> Delete</button>
            </a>
            <a href="{{route('article.editer', $article->id)}}" class="btn btn-sm btn-success"><i class="fa fa-edit"></i> Edit
            </a>
            
        </td>
    </tr>
@endforeach
</table>






@endsection