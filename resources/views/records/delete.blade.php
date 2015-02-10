@extends('layouts.backend.main')

@section('content')

<p>Are you sure you want to delete {!! $record->name !!}?</p>
{!! Form::open(['route' => ['records.destroy', $record->id], 'method' => 'delete']) !!}
    <button type="submit">Delete</button>
{!! Form::close() !!}
@stop