<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Project;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::with(['type', 'technology'])->orderBy('id','desc')->paginate(10);
        return response()->json(compact('projects'));
    }

    public function show($slug){
        $project = Project::where('slug',$slug)->with(['type', 'technology'])->first();

        return response()->json($project);

    }
}
