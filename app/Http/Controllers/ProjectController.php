<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateProjectRequest;
use App\Models\Project;
use Illuminate\Http\Response;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // dd('we are here');
        return Response::api(['data' => Project::with('tasks')->latest()->get()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CreateProjectRequest $request)
    {
        $project = Project::create($request->all());

        return Response::api(['project' => $project], Response::HTTP_OK);
    }

    /**
     * Display the specified resource.
     */
    public function show(Project $project)
    {
        $project->load('tasks'); // Use 'load' to eager load the tasks relationship
        return Response::api(['project' => $project], Response::HTTP_OK);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Project $project)
    {
        return view('projects.edit', compact('project'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CreateProjectRequest $request, Project $project)
    {
        $project->update($request->validated());

        return Response::api('project updated successfully!', Response::HTTP_OK);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Project $project)
    {
        $project->delete();

        return Response::api('project deleted successfully!', Response::HTTP_OK);
    }

    /**
     * Remove the specified resource from storage.
     */
    // public function clearCompleted()
    // {
    //     Project::whereStatus('completed')->delete();
    //     return Response::api('completed project list deleted successfully!', Response::HTTP_OK);
    // }
}
