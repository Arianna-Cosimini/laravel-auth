<?php

namespace App\Http\Controllers\Admin;

use App\Models\project;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\user;

class DashboardController extends Controller
{
    public function index()
    {
        $projects = Project::all();
        return view("admin.index", compact("projects"));
    }

    public function users()
    {
        return view('admin.index');
    }
}
