@extends('layouts.app')


@section('content')

<table style="margin-bottom: 100px" class="table">
    <tr>
        <th>id</th>
        <th>collection</th>
        <th>action</th>
    </tr>

@foreach($collections as $collection)
    <tr>
        <td>{{$collection->id}}</td>
        <td>{{$collection->titre}}</td>
        <td>
            <a href="{{route('collection.delete', $collection->id)}}" >
                <button type="submit" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i> Delete</button>
            </a>
            <a href="{{route('collection.editer', $collection->id)}}" class="btn btn-sm btn-success"><i class="fa fa-edit"></i> Edit
            </a>     
        </td>
    </tr>
@endforeach
    <!-- <tr>
        <td>2</td>
        <td>
            <a href="{{route('collection.editer', 2)}}" class="btn btn-sm btn-success"><i class="fa fa-edit"></i> Edit
            </a>    
        </td>
    </tr> -->
</table>






@endsection