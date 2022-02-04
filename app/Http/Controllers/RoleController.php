<?php

namespace App\Http\Controllers;

use App\Models\Role;

class RoleController extends Controller
{
    public function index()
    {

        $roles = Role::withCount('users')->get(); // no table or id to join roles with users

        return view('roles.index', compact('roles'));

    }
}
