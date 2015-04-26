@extends('layouts.backend')

@section('content')
@include('includes.errors')
@include('includes.session.message')

<p>Edit the aircraft {!! $aircraft->name!!}!</p>
{!! Form::model($aircraft, ['method' => 'put', 'route' => ['aircrafts.update', $aircraft->id], 'class' => 'form-signin', 'role' => 'form']) !!}
    @include('aircrafts.partials.form', ['submitButtonText' => 'Update'])
{!! Form::close() !!}
@stop