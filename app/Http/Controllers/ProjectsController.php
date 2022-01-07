<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProjectsStoreRequest;
use App\Models\Project;
use Illuminate\Http\Request;

class ProjectsController extends Controller
{
    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $projects = Project::all();

        return view('projects.index', compact('projects'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        return view('projects.create');
    }

    /**
     * @param \App\Http\Requests\ProjectsStoreRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProjectsStoreRequest $request)
    {
        $project = Project::create($request->validated());

        return redirect()->route('projects.index');
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Project $project
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, Project $project)
    {
        $project = Project::find($id);

        return view('projects.show', compact('project'));
    }
}
