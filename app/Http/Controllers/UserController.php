<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Comment;
use Illuminate\Http\Request;


class UserController extends Controller
{
    public function index()
    {
        $users = User::all();

        return view('users.index', compact('users'));
    }

    public function show(Request $request)
    {
        $user = User::with('tasks')->where('id', $request->user)->first();

        // dd($user);


        foreach ($user->tasks as $key => $user12) {
                      
        // dd($user12->id);

        $Comments = Comment::where('task_id', $user12->id)->get();

        // dd($Comments);   

        }        
      
        

        return view('users.show', compact('user', 'Comments'));
    }
}
