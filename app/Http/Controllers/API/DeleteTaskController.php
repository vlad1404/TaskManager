<?php


namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\TaskRequest;
use App\Models\Task;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class DeleteTaskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Task[]|\Illuminate\Database\Eloquent\Collection|\Illuminate\Http\Response
     */
    public function destroy(Task $task)
    {
        dd(3);
        return Task::orderBy('date')
            ->where(['id' => $request->input('id')])
            ->where(['created_by' => Auth::id()])
            ->delete();
    }
}
