@extends('layouts.app')

@section('title')
Album Detail - Favorite Music
@stop

@section('content')
<h1><a href="{{route('albums.edit',$album->id)}}">{{$album->name}}</a></h1>
<div class="panel panel-default">
    <div class="panel-body">
        <p><b>Band: </b>{{$album->band()->pluck('name')->pop()}}</p>
        <p><b>Date Recorded: </b>{{$album->recorded_date}}</p>
        <p><b>Date Released: </b>{{$album->release_date}}</p>
        <p><b>Number of Tracks: </b>{{$album->number_of_tracks}}</p>
        <p><b>Label: </b>{{$album->label}}</p>
        <p><b>Producer: </b>{{$album->producer}}</p>
        <p><b>Genre: </b>{{$album->genre}}</p>
    </div>
</div>
@stop