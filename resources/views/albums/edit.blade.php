@extends('layouts.app')

@section('title')
Edit Album - Favorite Music
@stop

@section('content')

<div class='col-md-12'><h1>Edit Album</h1></div>
{!! Form::model($album,['method'=>'PUT','action'=>['AlbumsController@update',$album->id]]) !!}

<div class='form-group col-md-6'>
    {!! Form::label('name','Name') !!}
    {!! Form::text('name',null,['class'=>'form-control']) !!}
</div>
<div class='form-group col-md-6'>
    {!! Form::label('label','Label') !!}
    {!! Form::text('label',null,['class'=>'form-control']) !!}
</div>
<div class='form-group col-md-6'>
    {!! Form::label('band_id','Band') !!}
    {!! Form::select('band_id',$bands,null,['class'=>'form-control']) !!}
</div>
<div class='form-group col-md-6'>
    {!! Form::label('number_of_tracks','Number of Tracks') !!}
    {!! Form::number('number_of_tracks',null,['class'=>'form-control']) !!}
</div>
<div class='form-group col-md-6'>
    {!! Form::label('recorded_date','Recorded Date') !!}
    {!! Form::date('recorded_date',\Carbon\Carbon::now(),['class'=>'form-control']) !!}
</div>
<div class='form-group col-md-6'>
    {!! Form::label('release_date','Release Date') !!}
    {!! Form::date('release_date',\Carbon\Carbon::now(),['class'=>'form-control']) !!}
</div>
<div class='form-group col-md-6'>
    {!! Form::label('producer','Producer') !!}
    {!! Form::text('producer',null,['class'=>'form-control']) !!}
</div>
<div class='form-group col-md-6'>
    {!! Form::label('genre','Genre') !!}
    {!! Form::text('genre',null,['class'=>'form-control']) !!}
</div>
<div class='form-group col-md-12'>
{!! Form::submit('Update Album', ['class'=>'btn btn-primary']) !!}
</div>
{!! Form::close() !!}

@if(count($errors)>0)
<div class='alert alert-danger'>
    <ul>
        @foreach($errors->all() as $error)
        <li>
            {{$error}}
        </li>
        @endforeach
    </ul>
</div>
@endif

@stop