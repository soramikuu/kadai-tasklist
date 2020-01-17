@extends('layouts.app')

@section('content')
    @if (Auth::id() == user->id)
        {!! Form::open(['route' => 'taskposts.store']) !!}
            <div class="form-group">
                {!! Form::textarea('content', old('content'), ['class' => 'form-control', 'rows' => '2']) !!}
                {!! Form::submit('Post', ['class' => 'btn btn-info btn-block']) !!}
            </div>
        {!! Form::close() !!}
    @endif
    @if (Auth::check())
        <div class="row">
            <aside class="col-sm-4">
                <div>
                    <h3>{{ Auth::user()->name }}</h3>
                </div>
                <div>
                    <img src="{{ Gravatar::src(Auth::user()->email, 200) }}" alt="">
                </div>
            </aside>
            <div class="col-sm-8">
                @if (count($taskposts) > 0)
                    @include('taskposts.taskposts')
                @endif
            </div>
        </div>
    @else
    <div class="center jumbotron">
        <div class="text-center">
            <h1>Welcome to the Tasklist</h1>
            {!! link_to_route('signup.get', 'signup now!', [],
            ['class' => 'btn btn-lg btn-info']) !!}
        </div>
    </div>
    @endif
@endsection