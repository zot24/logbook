@extends('layouts.backend')

@section('content')
@include('includes.session.message')

<p>Type: {!! $aircraft->type !!}</p>
<p>Name: {!! $aircraft->name !!}</p>
<p>Weight: {!! $aircraft->weight !!}</p>
<p>Capacity: {!! $aircraft->capacity !!}</p>
<p>Engine Type: {!! $aircraft->engine_type !!}</p>
<p>Manufacturer: {!! $aircraft->manufacturer !!}</p>
<p>Registration Number: {!! $aircraft->registration_number!!}</p>
<a class="btn btn-default" href="{!! URL::previous() !!}" role="button">Go back</a>
@stop