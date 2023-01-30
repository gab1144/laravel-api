<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\Technology;
use App\Models\Type;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::with(['type', 'technology'])->orderBy('id','desc')->paginate(10);
        $types = Type::all();
        $technologies = Technology::all();
        return response()->json(compact('projects', 'types', 'technologies'));
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

    public function search(){

        $tosearch = $_GET['tosearch'];

        $projects = Project::where('name','like',"%$tosearch%")->with(['type', 'technology'])->get();

        return response()->json($projects);
    }

    public function getByType($id){

        $projects = Project::where('type_id', $id)->with(['type', 'technology'])->get();

        return response()->json($projects);
    }

    public function getByTechnology($id){

        $projects_list = [];
        $technology = Technology::where('id',$id)->with(['project'])->first();
        foreach($technology->project as $project){
            $projects_list[] = Project::where('id',$project->id)->with(['type', 'technology'])->first();
        }

        return response()->json($projects_list);
    }
}
