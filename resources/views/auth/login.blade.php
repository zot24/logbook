@extends('layouts.frontend')

@section('content')
    @include('includes.errors')
    @include('includes.session.message')

    {!! Form::open(['route' => 'session.store', 'class' => 'form-signin', 'role' => 'form']) !!}
        <h2 class="form-signin-heading">Login</h2>

        {!! Form::label('email', 'Email', array('class' => 'sr-only')) !!}
        {!! Form::email('email', null, ['class' => 'form-control', 'placeholder' => 'Email', 'required', 'autofocus']) !!}

        {!! Form::label('password', 'Password', array('class' => 'sr-only')) !!}
        {!! Form::password('password', ['class' => 'form-control', 'placeholder' => 'Password', 'required']) !!}

        {!! Form::submit('Login', ['class' => "btn btn-lg btn-primary btn-block"]) !!}
    {!! Form::close() !!}
@stop