@extends('layouts.backend')

@section('content')
@include('includes.session.message')

<h2 class="sub-header">Aircrafts</h2>
<div class="table-responsive">
    <table class="table table-striped">
        <thead>
        <tr>
            <th>Type</th>
            <th>Name</th>
            <th>Weight</th>
            <th>Capacity</th>
            <th>Engine Type</th>
            <th>Manufacturer</th>
            <th>Registration Number</th>
            <th></th>
            <th></th>
        </tr>
        </thead>
        <tbody>
        @foreach ($aircrafts as $aircraft)
            <tr>
                <td>{!! $aircraft->type !!}</td>
                <td>{!! $aircraft->name !!}</td>
                <td>{!! $aircraft->weight !!}</td>
                <td>{!! $aircraft->capacity !!}</td>
                <td>{!! $aircraft->engine !!}</td>
                <td>{!! $aircraft->manufacturer !!}</td>
                <td>{!! $aircraft->registration_number !!}</td>
                <td><a href="{!! route('aircrafts.show', ['id' => $aircraft->id]) !!}">View</a></td>
                <td><a href="{!! route('aircrafts.edit', ['id' => $aircraft->id]) !!}">Edit</a></td>
            </tr>
        @endforeach
        </tbody>
    </table>

    <div>
        <a class="btn btn-success btn-lg" href="{!! route('aircrafts.create') !!}">Create</a>
    </div>
</div>
@stop