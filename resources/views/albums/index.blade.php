@extends('layouts.app')

@section('title')
Albums - Favorite Music
@stop

@section('content')
<h1>Albums</h1>
{!! Form::open(['method'=>'GET']) !!}
    {!! Form::label('band_id','Filter by Band') !!}
    {!! Form::select('band_id',[''=>'Show All']+$bands,$band_id,['class'=>'form-control']) !!}
{!! Form::close() !!}
<br/>
<table id="albums-table" class="table table-condensed">
    <thead class='sort'>
        <tr>
            <th>Name</th>
            <th>Band</th>
            <th>Recorded</th>
            <th>Released</th>
            <th>Tracks</th>
            <th>Label</th>
            <th>Producer</th>
            <th>Genre</th>
            <th></th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        @foreach($albums as $album)
        <tr>
            <td><a href="{{route('albums.show',$album->id)}}">{{$album->name}}</a></td>
            <td>{{$album->band()->pluck('name')->pop()}}</td>
            <td>{{$album->recorded_date}}</td>
            <td>{{$album->release_date}}</td>
            <td>{{$album->number_of_tracks}}</td>
            <td>{{$album->label}}</td>
            <td>{{$album->producer}}</td>
            <td>{{$album->genre}}</td>
            <td><a class='btn btn-link' href="{{route('albums.edit',$album->id)}}">Edit</a></td>
            <td>{!! Form::open(['method'=>'DELETE','action'=>['AlbumsController@destroy',$album->id]]) !!}
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
        window.history.pushState("object or string", "Title", "/"+window.location.href.substring(window.location.href.lastIndexOf('/') + 1).split("?")[0]);
        
        $("#albums-table").tablesorter();
        
        $("#band_id").change(function(e){
            e.preventDefault();
            $(this).parent().submit();
        });
        
        $('.delete-warn').click(function(e){
            if(!confirm("Are you sure you want to delete this album?")){
                e.preventDefault();
            }
        })
    });
</script>
@stop