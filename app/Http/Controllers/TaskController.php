<?php

namespace App\Http\Controllers;

use App\Task;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Repositories\TaskRepository;

class TaskController extends Controller
{
    protected $tasks;

    public function __construct(TaskRepository $tasks){
        $this->middleware('auth');
        $this->tasks=$tasks;
    }

    public function index(Request $request){
        return view('tasks',['tasks'=>$this->tasks->forUser($request->user()),]);
    }

    public function store(Request $request){
        $this->validate($request,['name'=>'required|max:255']);
        $request->user()->tasks()->create(['name'=>$request->name,]);
        return redirect('task');
    }

    public function destroy(Request $request,Task $task){
        $this->authorize('destory',$task);
        $task->delete();
        return redirect('task');
    }
}
