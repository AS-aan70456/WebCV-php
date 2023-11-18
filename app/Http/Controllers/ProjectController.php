<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;
class ProjectController extends Controller
{
    public function index(){
        $projects = Project::all();
        return view('projectsList', compact('projects'));
    }

    public function currentController(Request $request){
        $post = Post::find($request->id);
        return view('selectedPost', compact('post'));
    }
}
