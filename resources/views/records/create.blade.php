@extends('layouts.backend')

@section('content')
@include('includes.errors')
@include('includes.session.message')

<p>Add a new record!</p>
{!! Form::model($record = new \Motty\Logbook\Entities\Record, ['route' => ['records.store'], 'class' => 'form-signin', 'role' => 'form']) !!}
    @include('records.partials.form', ['submitButtonText' => 'Create'])
{!! Form::close() !!}
@stop