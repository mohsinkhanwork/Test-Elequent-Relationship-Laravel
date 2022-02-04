<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\User;

//done

class ProjectController extends Controller
{
    public function store(Request $request)
    {
        // TASK: Add one sentence to save the project to the logged-in user
        //   by $request->project_id and with $request->start_date parameter

        $projects = Project::create([

            'name' => $request->name,


        ]);
            
        $users = User::where('id', $request->UserID)->pluck('id');
          
                
        $projects->users()->attach($users, ['start_date' => $request->start_date]);
            
        return 'Success';

    }
}
