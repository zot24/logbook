<div class="form-group">
    {!! Form::label('start_time', 'Start time') !!}
    {!! Form::input('date', 'start_time', $defaultDateInput, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('stop_time', 'Stop time') !!}
    {!! Form::input('date', 'stop_time', $defaultDateInput, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('pilot_in_command', 'Pilot in command') !!}
    {!! Form::text('pilot_in_command', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('num_landings', 'Landings') !!}
    {!! Form::input('number', 'num_landings', $defaultDateInput, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('num_dec_landings', 'Dec Landings') !!}
    {!! Form::input('number', 'num_dec_landings', $defaultDateInput, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('num_instrumental_approach', 'Instrumental Landings') !!}
    {!! Form::input('number', 'num_instrumental_approach', $defaultDateInput, ['class' => 'form-control']) !!}
</div>

{!! Form::submit($submitButtonText, ['class' => "btn btn-lg btn-primary"]) !!}
<a class="btn btn-default" href="{!! URL::previous() !!}" role="button">Go back</a>
