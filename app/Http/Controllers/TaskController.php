<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index(Request $request)
{
    $query = Task::where('user_id', auth()->id());

    // Apply status filter if provided
    if ($request->has('status') && !empty($request->status)) {
        $query->where('status', $request->status);
    }

    $tasks = $query->orderBy('due_date', 'asc')->get();

    return view('admin.pages.tasks.index', compact('tasks'));
}


    public function create()
    {
        return view('admin.pages.tasks.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'due_date' => 'required|date',
        ]);

        Task::create(array_merge($request->all(), ['user_id' => auth()->id()]));
        return redirect()->route('tasks.index')->with('success', 'Task created successfully!');
    }

    public function show(Task $task)
    {
        return view('admin.pages.tasks.show', compact('task'));
    }


    public function edit(Task $task)
    {
        return view('admin.pages.tasks.edit', compact('task'));
    }

    public function update(Request $request, Task $task)
    {

        $request->validate([
            'title' => 'required|string|max:255',
            'status' => 'required|in:Pending,In Progress,Completed',
            'due_date' => 'required|date',
        ]);

        $task->update($request->all());
        return redirect()->route('tasks.index')->with('success', 'Task updated successfully!');
    }

    public function destroy(Task $task)
    {
        $task->delete();
        return redirect()->route('tasks.index')->with('success', 'Task deleted successfully!');
    }
}
