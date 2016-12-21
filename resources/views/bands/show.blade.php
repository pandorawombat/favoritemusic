@extends('layouts.app')

@section('title')
Band Detail - Favorite Music
@stop

@section('content')
<h1><a href="{{route('bands.edit',$band->id)}}">{{$band->name}}</a></h1>
<div class="panel panel-default">
    <div class="panel-body">
        <p><b>Start Date: </b>{{$band->start_date}}</p>
        <p><b>Website: </b>{{$band->website}}</p>
        <p><b>Still Active: </b>
            @if ($band->still_active)
            True
            @else
            False
            @endif
        </p>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3>Albums</h3>
            </div>
            <div class="panel-body">
                @foreach ($albums as $album)
                <p>{{$album->name}}</p>
                @endforeach
            </div>
        </div>
    </div>
</div>
@stop