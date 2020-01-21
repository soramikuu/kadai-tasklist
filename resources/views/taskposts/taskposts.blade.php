<ul>
    @foreach ($taskposts as $taskpost)
        <li class="media">
           <img src="{{ Gravatar::src($taskpost->user->email, 50) }}" alt="">
           <div class="">
               <div>
                   <p>{{ $taskpost->user->name }}</p><span class="text-muted">posted at {{ $taskpost->created_at }}</span>
               </div>
               <div>
                   <p>{!! nl2br(e($taskpost->content)) !!}</p>
               </div>
               <div>
                    @if (Auth::id() == $taskpost->user_id)
                        
                        {!! Form::open(['route' => ['taskposts.destroy',$taskpost->id], 
                        'method' => 'delete']) !!}
                            {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-sm']) !!}
                        {!! Form::close() !!}
                    @endif
               </div>
           </div>
        </li>
    @endforeach
</ul>
{{ $taskposts->links('pagination::bootstrap-4') }}