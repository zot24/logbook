@extends('layouts.backend')

@section('content')
@include('includes.session.message')

<h2 class="sub-header">Records</h2>
<div class="table-responsive">
    <table class="table table-striped">
        <thead>
        <tr>
            <th>Start time</th>
            <th>Stop time</th>
            <th>Pilot in command</th>
            <th>Num Landings</th>
            <th>Num Dec Landings</th>
            <th>Num Instrumental Approach</th>
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
                <td>{!! $record->num_landings !!}</td>
                <td>{!! $record->num_dec_landings !!}</td>
                <td>{!! $record->num_instrumental_approach !!}</td>
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