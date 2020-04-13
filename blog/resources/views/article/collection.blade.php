@extends('layouts.app')


@section('content')

<table style="margin-bottom: 100px" class="table">
    <tr>
        <th>id</th>
        <th>collection</th>
        <th> 

        </th>
    </tr>

    <tr>
        <td>1</td>
        <td>
            <a href="{{route('collection.editer', 1)}}" class="btn btn-sm btn-success"><i class="fa fa-edit"></i> Edit
            </a>       
        </td>
    </tr>

    <tr>
        <td>2</td>
        <td>
            <a href="{{route('collection.editer', 2)}}" class="btn btn-sm btn-success"><i class="fa fa-edit"></i> Edit
            </a>    
        </td>
    </tr>
</table>






@endsection