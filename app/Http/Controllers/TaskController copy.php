<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index()
    {
        $tasks = Task::where('user_id', auth()->id())
            ->orderBy('due_date', 'asc')
            ->get();
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
        // $this->authorize('view', $task);
        return view('admin.pages.tasks.show', compact('task'));
    }


    public function edit(Task $task)
    {
        // $this->authorize('update', $task);
        return view('admin.pages.tasks.edit', compact('task'));
    }

    public function update(Request $request, Task $task)
    {
        // $this->authorize('update', $task);

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
        // $this->authorize('delete', $task);
        $task->delete();
        return redirect()->route('tasks.index')->with('success', 'Task deleted successfully!');
    }
}
