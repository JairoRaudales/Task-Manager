<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tarea;
use Inertia\Response;
use App\Http\Requests\TaskRequest;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     * 
     */
    public function index()
    {
        $task = Tarea::paginate(25);
        return inertia('Task/Index',['tasks' => $task]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return inertia('Task/Create');
    }

    /**
     * Store a newly created resource in storage.
     * 
     * @param App\Htttp\Requests\TaskRequest
     * @return \Iluminate\Htttp\Response
     * 
     */
    public function store(TaskRequest $request)
    {
        Tarea::create($request->validated());
        return redirect()->route('task.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Task $tarea)
    {
        return inertia('Task/Edit', ['task' => $tarea]);
    }

    /**
     * Update the specified resource in storage.
     * @param App\Htttp\Requests\TaskRequest
     */
    public function update(TaskRequest $request, Tarea $tarea)
    {
        $tarea -> update($request->validated());
        return redirect()->route('task.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}