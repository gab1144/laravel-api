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

        if($project->cover_image){
            $project->cover_image = url("storage/" . $project->cover_image);
        }else{
            $project->cover_image = url("storage/uploads/placeholder-image.jpg");
        }

        return response()->json($project);

    }
}
