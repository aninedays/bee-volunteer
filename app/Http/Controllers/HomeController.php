<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Charity;
use App\Models\Home;
use App\Models\Type;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $home = Home::latest()->paginate(5);
        return view('main')->with('home', $home);
    }
}
