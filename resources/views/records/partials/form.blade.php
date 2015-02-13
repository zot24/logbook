<div class="form-group">
    {!! Form::label('start_time', 'Start time') !!}
    {!! Form::input('date', 'start_time', $record->start_time, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('stop_time', 'Stop time') !!}
    {!! Form::input('date', 'stop_time', $record->stop_time, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('pilot_in_command', 'Pilot in command') !!}
    {!! Form::text('pilot_in_command', $record->pilot_in_command, ['class' => 'form-control']) !!}
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

{!! Form::submit($submitButtonText, ['class' => "btn btn-lg btn-primary"]) !!}
<a class="btn btn-default" href="{!! URL::previous() !!}" role="button">Go back</a>
