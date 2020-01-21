@extends('layouts.app')

@section('content')
@if (Auth::id() == user->id)
    <h1>タスク一覧</h1>
    
    @if (count($tasks) > 0)
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>id</th>
                    <th>タスク</th>
                    <th>ステータス</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($tasks as $task)
                <tr>
                    <td>{!! link_to_route('tasks.show', $task->id, ['id' => $task->id]) !!}</td>
                    <td>{{ $task->content }}</td>
                    <td>{{ $task->status }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    @endif
    
    {{ $tasks->links('pagination::bootstrap-4') }}
    
    {!! link_to_route('tasks.create', '新規タスクの追加', [],
    ['class' => 'btn btn-primary']) !!}
@else
    <div class="center jumbotron">
        <div class="text-center">
            <h1>Welcome to the Tasklist</h1>
            {!! link_to_route('signup.get', 'signup now!', [],
            ['class' => 'btn btn-lg btn-info']) !!}
        </div>
    </div>
@endsection