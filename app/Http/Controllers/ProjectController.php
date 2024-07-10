<?php

namespace App\Http\Controllers;
use App\Models\Project;

use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index()
    {
        return view('backend.project.index');
    }
    public function create(Request $request)
    {
        Project::createProject($request);
        return redirect('/project/manage')->with('msg', 'Project Info Created');
    }
    public function manage()
    {
        return view('backend.project.manage', ['projects' => Project::all()]);
    }
    public function edit($id)
    {
        return view('backend.project.edit', ['project' => Project::find($id)]);
    }
    public function update(Request $request, $id)
    {
        Project::updateProject($request, $id);
        return redirect('/project/manage')->with('msg', 'Project Info Updated');
    }
    public function delete($id)
    {
        Project::deleteProject($id);
        return back()->with('msg', 'Project Info Deleted Successfully');
    }

}
