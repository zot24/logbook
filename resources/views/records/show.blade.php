@extends('layouts.backend')

@section('content')
@include('includes.session.message')

<p>ID: {!! $record->id !!}</p><br/>
<p>Start time (Rotor start): {!! $record->start_time !!}</p>
<p>Stop time (Rotor stop): {!! $record->stop_time !!}</p>
<p>Pilot in Command: {!! $record->pilot_in_command !!}</p>
<p>Aircraft: {!! $record->aircraft !!}</p>
<p>Aircraft Registration Number: {!! $record->aircraft_registration !!}</p>
<p>Aircraft Engine Type: {!! $record->aircraft_engine_type !!}</p>
<p>Departure Airport: {!! $record->departure_airport !!}</p>
<p>Arrive Airport: {!! $record->arrive_airport !!}</p>
<p>Landings: {!! $record->num_landings !!}</p>
<p>Dec Landings: {!! $record->num_dec_landings !!}</p>
<p>Instrumental Landings: {!! $record->num_instrumental_approach!!}</p>
<p>Cross Country: {!! $record->cross_country !!}</p>
<p>Night Hours: {!! $record->night_hours !!}</p>
<p>Instrumental Hours: {!! $record->instrumental_hours !!}</p>
<a class="btn btn-default" href="{!! URL::previous() !!}" role="button">Go back</a>
@stop