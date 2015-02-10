@extends('layouts.backend')

@section('content')
@include('includes.errors')
@include('includes.session.message')

<p>Edit the record {!! $record->id !!}!</p>
{!! Form::model($record, ['method' => 'put', 'route' => ['records.update', $record->id], 'class' => 'form-signin', 'role' => 'form']) !!}
@include(
    'records.partials.form',
    [
        'submitButtonText' => 'Update',
        'defaultDateInput' => null,
        'defaultNumericInput' => null
    ]
)
{!! Form::close() !!}
@stop