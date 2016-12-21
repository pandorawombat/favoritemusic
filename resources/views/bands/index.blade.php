@extends('layouts.app')

@section('title')
Bands - Favorite Music
@stop

@section('content')
<h1>Bands</h1>
<table id="bands-table" class="table table-condensed">
    <thead class='sort'>
        <tr>
            <th>Name</th>
            <th>Start Date</th>
            <th>Website</th>
            <th>Still Active</th>
            <th></th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        @foreach($bands as $band)
        <tr>
            <td><a href="{{route('bands.show',$band->id)}}">{{$band->name}}</a></td>
            <td>{{$band->start_date}}</td>
            <td>{{$band->website}}</td>
            <td>
                @if ($band->still_active)
                True
                @else
                False
                @endif
            </td>
            <td><a class='btn btn-link' href="{{route('bands.edit',$band->id)}}">Edit</a></td>
            <td>{!! Form::open(['method'=>'DELETE','action'=>['BandsController@destroy',$band->id]]) !!}
                {!! Form::submit('Delete', ['class'=>'btn btn-link delete-warn']) !!}
                {!! Form::close() !!}
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@stop

@section('footer-scripts')
<script>
    jQuery(function($){
        $("#bands-table").tablesorter();
        
        $('.delete-warn').click(function(e){
            if(!confirm("Are you sure you want to delete this band? All related albums will also be deleted.")){
                e.preventDefault();
            }
        })
    });
</script>
@stop