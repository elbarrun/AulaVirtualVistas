<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TasksController extends Controller
{
    public function create(Request $request){
        $task = Task::all();
        return view('tasks.create',compact('task'));
    }
}
