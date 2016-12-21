@extends('layouts.app')

@section('title')
Edit Band - Favorite Music
@stop

@section('content')

<div class='col-md-12'><h1>Edit Band</h1></div>
{!! Form::model($band,['method'=>'PUT','action'=>['BandsController@update',$band->id]]) !!}

<div class='form-group col-md-6'>
    {!! Form::label('name','Name') !!}
    {!! Form::text('name',null,['class'=>'form-control']) !!}
</div>
<div class='form-group col-md-6'>
    {!! Form::label('start_date','Start Date') !!}
    {!! Form::date('start_date',\Carbon\Carbon::now(),['class'=>'form-control']) !!}
</div>
<div class='form-group col-md-6'>
    {!! Form::label('website','Website') !!}
    {!! Form::text('website',null,['class'=>'form-control']) !!}
</div>
<div class='form-group col-md-6'>
    {!! Form::label('still_active','Still Active') !!}
    {!! Form::select('still_active',['0'=>'No','1'=>'Yes'],null,['class'=>'form-control']) !!}
</div>
<div class='form-group col-md-12'>
{!! Form::submit('Update Band', ['class'=>'btn btn-primary']) !!}
</div>
{!! Form::close() !!}

<div class="col-md-12">
    <h3>Albums</h3>
    @foreach ($albums as $album)
    <p>{{$album->name}}</p>
    @endforeach
</div>

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