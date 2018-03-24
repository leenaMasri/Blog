<?php

namespace App\Http\Controllers;

use App\Task;


class TasksController extends Controller
{
    public function index()
    {
        $tasks = Task::all();
        return view('tasks.index',compact('tasks'));


    }

    public function show(Task $task)//this is called route model binding//Task::find(wildcard);
    {
       // $task = Task::find($id);
        //return $task;
        return view('tasks.show',compact('task'));
    }
}
