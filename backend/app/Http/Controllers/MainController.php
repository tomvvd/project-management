<?php

namespace App\Http\Controllers;

use App\Models\Project;

class MainController extends Controller
{
    public function getAllProjects()
    {
        $projects = Project::all();
        return response()->json($projects);
    }
}
