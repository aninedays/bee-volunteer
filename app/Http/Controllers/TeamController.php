<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Team;

class TeamController extends Controller
{
    public function index()
    {
        $team = Team::all();
        return view('about')->with('team', $team);
    }
}
