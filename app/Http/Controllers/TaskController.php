<?php

namespace LosCedros\Http\Controllers;

use LosCedros\Task;
use LosCedros\Http\Requests;
use Illuminate\Http\Request;
use LosCedros\Http\Controllers\Controller;
use LosCedros\Repositories\TaskRepository;

class TaskController extends Controller
{
    /**
     * The task repository instance.
     *
     * @var TaskRepository
     */
    protected $tasks;

    /**
     * Create a new controller instance.
     *
     * @param  TaskRepository  $tasks
     * @return void
     */
    public function __construct(TaskRepository $tasks)
    {
        $this->middleware('auth');

        $this->tasks = $tasks;
    }

    /**
     * Display a list of all of the user's task.
     *
     * @param  Request  $request
     * @return Response
     */
    public function index(Request $request)
    {
        return view('tasks.index', [
        'tasks' => $this->tasks->forUser($request->user()),
    ]);
    }

    /**
     * Create a new task.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|max:255',
            'photo'=> 'image',
        ]);



        $file =$request->file('photo');
        $image_name = time()."-".$file->getClientOriginalName();
        \Storage::disk('local')->put($image_name,  \File::get($file));


        $request->user()->tasks()->create([
            'name' => $request->name,
            'photo'	=> $image_name,
        ]);


        return redirect('/tasks');
    }

    /**
     * Destroy the given task.
     *
     * @param  Request  $request
     * @param  Task  $task
     * @return Response
     */
    public function destroy(Request $request, Task $task)
    {
        $this->authorize('destroy', $task);

        $task->delete();

        return redirect('/tasks');
    }
}
