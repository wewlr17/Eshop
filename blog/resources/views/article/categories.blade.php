@extends('layouts.app')


@section('content')

<table style="margin-bottom: 100px" class="table">
    <tr>
        <th>id</th>
        <th>titre</th>
        <th> 
        <a href="{{route('categorie.add')}}">
            <button type="button" class="btn btn-success" style="background-color: grey; width: 16%">+</button> 
        </a>
        </th>
    </tr>

@foreach($categories as $categorie)
    <tr>
        <td>{{$categorie->id}}</td>
        <td>{{$categorie->titre}}</td>
        <td>
            <a href="{{route('categorie.delete', $categorie->id)}}" >
            <button type="submit" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i> Delete</button>

            </a>
            <a href="{{route('categorie.editer', $categorie->id)}}" class="btn btn-sm btn-success"><i class="fa fa-edit"></i> Edit
            </a>
            
        </td>
    </tr>

@endforeach
</table>






@endsection