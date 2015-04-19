@extends('layouts.backend')

@section('content')
@include('includes.errors')
@include('includes.session.message')

<p>Add a new aircraft!</p>
{!! Form::model($aircraft = new \Motty\Logbook\Entities\Aircraft, ['route' => ['aircrafts.store'], 'class' => 'form-signin', 'role' => 'form']) !!}
    @include('aircrafts.partials.form', ['submitButtonText' => 'Create'])
{!! Form::close() !!}
@stop