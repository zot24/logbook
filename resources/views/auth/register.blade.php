@extends('layouts.frontend')

@section('content')
    {!! Form::open(['route' => 'register.store', 'class' => 'form-register', 'role' => 'form']) !!}
    <h2 class="form-register-heading">Register</h2>

    {!! Form::label('email', 'Email', array('class' => 'sr-only')) !!}
    {!! Form::email('email', null, ['class' => 'form-control', 'placeholder' => 'Email', 'required', 'autofocus']) !!}

    {!! Form::label('password', 'Password', array('class' => 'sr-only')) !!}
    {!! Form::password('password', ['class' => 'form-control', 'placeholder' => 'Password', 'required']) !!}

    {!! Form::label('password_confirmation', 'Confirm Password', array('class' => 'sr-only')) !!}
    {!! Form::password('password_confirmation', ['class' => 'form-control', 'placeholder' => 'Confirm Password', 'required']) !!}

    {!! Form::submit('Register', ['class' => "btn btn-lg btn-primary btn-block"]) !!}
    {!! Form::close() !!}
@endsection