@extends('layouts.backend')

@section('content')
@include('includes.session.message')

<h2 class="sub-header">Records</h2>
<div class="table-responsive">
    <table class="table table-striped">
        <thead>
        <tr>
            <th>Start time (Rotor start)</th>
            <th>Stop time (Rotor stop)</th>
            <th>Pilot in command</th>
            <th>Aircraft</th>
            <th>Aircraft Registration Number</th>
            <th>Aircraft Engine Type</th>
            <th>Departure Airport</th>
            <th>Arrive Airport</th>
            <th>Num Landings</th>
            <th>Num Dec Landings</th>
            <th>Num Instrumental Approach</th>
            <th>Cross Country</th>
            <th>Night Hours</th>
            <th>Instrumental Hours</th>
            <th></th>
            <th></th>
        </tr>
        </thead>
        <tbody>
        @foreach ($records as $record)
            <tr>
                <td>{!! $record->start_time !!}</td>
                <td>{!! $record->stop_time !!}</td>
                <td>{!! $record->pilot_in_command !!}</td>
                <td>{!! $record->aircraft !!}</td>
                <td>{!! $record->aircraft_registration !!}</td>
                <td>{!! $record->aircraft_engine_type !!}</td>
                <td>{!! $record->departure_airport !!}</td>
                <td>{!! $record->arrive_airport !!}</td>
                <td>{!! $record->num_landings !!}</td>
                <td>{!! $record->num_dec_landings !!}</td>
                <td>{!! $record->num_instrumental_approach !!}</td>
                <td>{!! $record->cross_country !!}</td>
                <td>{!! $record->night_hours !!}</td>
                <td>{!! $record->instrumental_hours !!}</td>
                <td><a href="{!! route('records.show', ['id' => $record->id]) !!}">View</a></td>
                <td><a href="{!! route('records.edit', ['id' => $record->id]) !!}">Edit</a></td>
            </tr>
        @endforeach
        </tbody>
    </table>

    <div>
        <a class="btn btn-success btn-lg" href="{!! route('records.create') !!}">Create</a>
    </div>
</div>
@stop