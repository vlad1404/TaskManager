<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Task;
use Illuminate\Support\Facades\Auth;

class TasksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Task[]|\Illuminate\Database\Eloquent\Collection|\Illuminate\Http\Response
     */
    public function index()
    {
        return Task::orderBy('date')
            ->where(['created_by' => Auth::id()])
            ->get();
    }

    /**
     * Display a listing of the resource.
     *
     * @return Task[]|\Illuminate\Database\Eloquent\Collection|\Illuminate\Http\Response
     */
    public function destroy(Task $task)
    {
        return Task::orderBy('date')
            ->where(['id' => $task->id])
            ->where(['created_by' => Auth::id()])
            ->delete();
    }
}
