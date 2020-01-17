<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TaskpostsController extends Controller
{
    public function index()
    {
        $data = [];
        if (\Auth::check()) {
            $user = \Auth::user();
            $taskposts = $user->taskposts()->orderBy('created_at', 'desc')
            ->paginate(10);
            
            $data = [
                'user' => $user,
                'taskposts' => $taskposts
            ];
        }
        
        return view('welcome', $data);
    }
    
    public function store(Request $request)
    {
        $this->validate($request, [
            'content' => 'required|max:191',
        ]);
        
        $request->user()->taskposts()->create([
            'content' => $request->content,
        ]);
        
        return back();
    }
    
    public function destroy($id)
    {
        $taskpost = \App\Taskpost::find($id);
        
        if (\Auth::id() === $taskpost->user_id) {
            $taskpost->delete();
        }
        
        return back();
    }
}
