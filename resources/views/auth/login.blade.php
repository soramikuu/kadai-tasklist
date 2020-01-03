@extends('layouts.app')

@section('content')
    <div class="text-center">
        <h1>Log in</h1>
    </div>
    <div class="row">
        <div class="col-sm-6 offset-sm-3">
            {!! Form::open(['route' => 'login.post']) !!}
                {!! Form::label('email', 'Email') !!}
                {!! Form::email('email', old('email'), ['class' => 'form-control']) !!}
                {!! Form::label('password', 'Password') !!}
                {!! Form::password('password', ['class' => 'form-control']) !!}
            {!! Form::close() !!}
        </div>
    </div>

@endsection