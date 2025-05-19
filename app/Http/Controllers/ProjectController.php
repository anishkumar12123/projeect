<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function create()
    {
        return view('add_project');
    }

    // public function store(Request $request)
    // {
    //     Project::create($request->all());
    //     return redirect('/projects');
    // }

    public function store(Request $request)
{
    // Step 1: Validate the request
    $validated = $request->validate([
        'project_name' => 'required|string|max:255',
        'project_date' => 'required|date',
        'project_deadline' => 'required|date|after_or_equal:project_date',
        'project_link' => 'required',
    ]);

    // Step 2: Store the validated data
    Project::create($validated);

    // Step 3: Redirect with success message
    return redirect('projects')->with('success', 'Project added successfully!');
}


    public function index()
    {
        $projects = Project::all();
        return view('projects', compact('projects'));
    }

    public function edit($id)
    {
        $project = Project::find($id);
        return view('edit_project', compact('project'));
    }

    public function update(Request $request, $id)
    {
        $project = Project::find($id);
        $project->update($request->all());
        return redirect('/projects');
    }

    public function destroy($id)
    {
        Project::find($id)->delete();
        return redirect('/projects');
    }
}
