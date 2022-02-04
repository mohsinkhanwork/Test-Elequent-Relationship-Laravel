<?php

namespace App\Http\Controllers;

use App\Models\Country;

class CountryController extends Controller
{
    public function index()
    {
        // TASK: load the relationship average of team size
        $countries = Country::with('teams')->get();

        // dd($countries->teams);  


        // foreach ($countries as $countrTeams) {
        
        //     dd($countrTeams->teams[0]['size']);    
        
        // }

        return view('countries.index', compact('countries'));
    }
}
