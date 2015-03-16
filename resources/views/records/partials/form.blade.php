<div class="form-group">
    {!! Form::label('start_time', 'Start time (Rotor start)') !!}
    {!! Form::input('date', 'start_time', $record->start_time, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('stop_time', 'Stop time (Rotor stop)') !!}
    {!! Form::input('date', 'stop_time', $record->stop_time, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('pilot_in_command', 'Pilot in command') !!}
    {!! Form::text('pilot_in_command', $record->pilot_in_command, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('aircraft', 'Aircraft') !!}
    {!! Form::text('aircraft', $record->aircraft, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('aircraft_registration', 'Aircraft Registration Number') !!}
    {!! Form::text('aircraft_registration', $record->aircraft_registration, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('aircraft_engine_type', 'Aircraft Engine Type') !!}
    {!! Form::text('aircraft_engine_type', $record->aircraft_engine_type, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('departure_airport', 'Departure Airport') !!}
    {!! Form::text('departure_airport', $record->departure_airport, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('arrive_airport', 'Arrive Airport') !!}
    {!! Form::text('arrive_airport', $record->arrive_airport, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('num_landings', 'Landings') !!}
    {!! Form::input('number', 'num_landings', $record->num_landings, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('num_dec_landings', 'Dec Landings') !!}
    {!! Form::input('number', 'num_dec_landings', $record->num_dec_landings, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('num_instrumental_approach', 'Instrumental Landings') !!}
    {!! Form::input('number', 'num_instrumental_approach', $record->num_instrumental_approach, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('cross_country', 'Cross Country') !!}
    {!! Form::input('number', 'cross_country', $record->cross_country, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('night_hours', 'Night Hours') !!}
    {!! Form::input('number', 'night_hours', $record->night_hours, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('instrumental_hours', 'Instrumental Hours') !!}
    {!! Form::input('number', 'instrumental_hours', $record->instrumental_hours, ['class' => 'form-control']) !!}
</div>

{!! Form::submit($submitButtonText, ['class' => "btn btn-lg btn-primary"]) !!}
<a class="btn btn-default" href="{!! URL::previous() !!}" role="button">Go back</a>
