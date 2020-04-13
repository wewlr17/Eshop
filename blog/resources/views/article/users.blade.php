@extends('layouts.app')


@section('content')

Coucou liste des users pour l'admin


<table class="table">
    <tr>
        <th>id</th>
        <th>prenom</th>
        <th>email</th>
        <th>role</th>
        <th>image</th>
        
    </tr>

@foreach($users as $user)
    <tr>
        <td>{{$user->id}}</td>
        <td>{{$user->name}}</td>
        <td>{{$user->email}}</td>
        <td>{{$user->role_user}}</td>
        <td>
            <img class="small-image" src="{{asset('images/'.$user->img_profile)}}" alt="{{$user->title}}">
        <td>
        <td>
            <a href="{{route('user.delete', $user->id)}}" > 
                <button type="submit" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i> Delete</button>
            </a>
            <a href="{{route('user.profile', $user->id)}}" class="btn btn-sm btn-success"><i class="fa fa-edit"></i> Edit
            </a>
            
        </td>
    </tr>
@endforeach
</table>






@endsection