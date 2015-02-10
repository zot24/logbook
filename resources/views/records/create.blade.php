@extends('layouts.backend')

@section('content')
@include('includes.errors')
@include('includes.session.message')

<p>Add a new record!</p>
{!! Form::open(['route' => ['records.store'], 'class' => 'form-signin', 'role' => 'form']) !!}
    @include(
        'records.partials.form',
        [
            'submitButtonText' => 'Create',
            'defaultDateInput' => date('Y-m-d'),
            'defaultNumericInput' => 0
        ]
    )
{!! Form::close() !!}
@stop