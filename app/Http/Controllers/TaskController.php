<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateTaskRequest;
use App\Models\Project;
use App\Models\Task;
use Illuminate\Http\Response;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // return Response::api(['data' => Project::with('tasks')->latest()->get()]);
        return Response::api(['data' => Task::latest()->get()]);
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
    public function store(CreateTaskRequest $request)
    {
        $task = Task::create($request->all());

        return Response::api(['task' => $task], Response::HTTP_OK);
    }

    /**
     * Display the specified resource.
     */
    public function show(Task $task)
    {
        return Response::api(['task' => $task], Response::HTTP_OK);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Task $task)
    {
        return view('tasks.edit', compact('task'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CreateTaskRequest $request, Task $task)
    {
        $task->update($request->validated());

        return Response::api('task updated successfully!', Response::HTTP_OK);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Task $task)
    {
        $task->delete();

        return Response::api('task deleted successfully!', Response::HTTP_OK);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function clearCompleted()
    {
        Task::whereStatus('completed')->delete();
        return Response::api('completed task list deleted successfully!', Response::HTTP_OK);
    }
}
