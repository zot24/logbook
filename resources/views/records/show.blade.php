@extends('layouts.backend')

@section('content')
@include('includes.session.message')

<p>ID: {!! $record->id !!}</p><br/>
<p>Start time: {!! $record->start_time !!}</p>
<p>Stop time: {!! $record->stop_time !!}</p>
<p>Pilot in Command: {!! $record->pilot_in_command !!}</p>
<p>Landings: {!! $record->num_landings !!}</p>
<p>Dec Landings: {!! $record->num_dec_landings !!}</p>
<p>Instrumental Landings: {!! $record->num_instrumental_approach!!}</p>
<p>Pilot in Command: {!! $record->pilot_in_command !!}</p>

<a class="btn btn-default" href="{!! URL::previous() !!}" role="button">Go back</a>
@stop