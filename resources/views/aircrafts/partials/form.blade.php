<div class="form-group">
    {!! Form::label('type', 'Type') !!}
    {!! Form::text('type', $aircraft->type, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('name', 'Name') !!}
    {!! Form::text('name', $aircraft->name, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('weight', 'Weight (lb)') !!}
    {!! Form::input('number', 'weight', $aircraft->weight, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('capacity', 'Capacity') !!}
    {!! Form::input('number', 'capacity', $aircraft->capacity, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('engine_type', 'Engine Type') !!}
    {!! Form::text('engine_type', $aircraft->engine_type, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('manufacturer', 'Manufacturer') !!}
    {!! Form::text('manufacturer', $aircraft->manufacturer, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('registration_number', 'Registration Number') !!}
    {!! Form::text('registration_number', $aircraft->registration_number, ['class' => 'form-control']) !!}
</div>

{!! Form::submit($submitButtonText, ['class' => "btn btn-lg btn-primary"]) !!}
<a class="btn btn-default" href="{!! URL::previous() !!}" role="button">Go back</a>
