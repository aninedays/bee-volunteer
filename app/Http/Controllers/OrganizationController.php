<?php

namespace App\Http\Controllers;

use App\Models\Organization;

use Illuminate\Http\Request;

class OrganizationController extends Controller
{
    public function index()
    {
        $organization = Organization::latest()->paginate(9);
        return view('organizations.organization')->with('organization', $organization);
    }
}
