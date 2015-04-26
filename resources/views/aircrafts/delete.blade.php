@extends('layouts.backend.main')

@section('content')

<p>Are you sure you want to delete {!! $aircraft->name !!}?</p>
{!! Form::open(['route' => ['aircrafts.destroy', $aircraft->id], 'method' => 'delete']) !!}
    <button type="submit">Delete</button>
{!! Form::close() !!}
@stop