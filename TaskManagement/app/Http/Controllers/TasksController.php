<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TasksController extends Controller
{
    public function index()
    {
        $tasks = Task::all();
        return view('index', compact('tasks'));
    }

    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'description' => 'required'
        ]);
        $validatedData['title'] = strip_tags($validatedData['title']);
        $validatedData['description'] = strip_tags($validatedData['description']);
        Task::create($validatedData);

        return redirect()->route('index')->with('success', 'Task created successfully!');
    }

    public function edit(Task $task)
    {
        return view('edit', compact('task'));
    }

    public function update(Request $request, Task $task)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'description' => 'required'
        ]);

        $validatedData['title'] = strip_tags($validatedData['title']);
        $validatedData['description'] = strip_tags($validatedData['description']);
        $task->update($validatedData);

        return redirect()->route('index')->with('success', 'Task updated successfully!');
    }

    public function destroy(Task $task)
    {
        $task->delete();

        return redirect()->route('index')->with('success', 'Task deleted successfully!');
    }
}
