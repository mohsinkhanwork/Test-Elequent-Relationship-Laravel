<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;


class TaskController extends Controller
{
    public function index()
    {
        $tasks = Task::with('user')->paginate();

        return view('tasks.index', compact('tasks'));
    }

    public function store(Request $request)
    {
        // TASK: find out why this sentence fails, and fix it in Eloquent Model
        // auth()->user()->tasks()->create([
        //     'name' => $request->name
        // ]);

        Task::create([

            'name' => $request->name,   
            // 'users_id' => Auth()->user()->id
            // 'users_id' => Auth::id()
            'users_id' => rand(0,1)

        ]);

        return 'Success';
    }
}
