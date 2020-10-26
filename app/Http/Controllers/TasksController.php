<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;
use App\Http\Requests\TaskRequest;
use Illuminate\Support\Facades\Auth;

class TasksController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('tasks.index')
            ->withTasks(Task::orderBy('date')
                ->where(['created_by' => Auth::id()])
                ->get());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tasks.create');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function show(Task $task)
    {
        return view('tasks.view', ['task' => $task]);
    }

    public function store(TaskRequest $request)
    {
        $request = array_merge($request->validated(), [
            'created_by' => Auth::id(),
        ]);
        Task::create($request);

        return redirect()->route('tasks.index')
            ->with('success', 'Product created successfully.');
    }

    public function update(TaskRequest $request, Task $task)
    {
        $request = array_merge($request->validated(), [
            'created_by' => Auth::id(),
        ]);
        $task->update($request);

        return redirect()->route('tasks.index')
            ->with('success', 'Product updated successfully');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, Task $task)
    {
        return view('tasks.update', ['task'=>$task??[]]);
    }
}
