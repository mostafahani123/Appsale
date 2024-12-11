<?php

namespace App\Http\Controllers;
use App\Models\Todo;
use App\Http\Requests\TodoRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
class TodoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $todos = Todo::all();
        return view('todos.index', compact('todos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('todos.create');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(TodoRequest $request)
{
    Todo::create([
        'title' => $request->title,
        'description' => $request->description,

    ]);

    return redirect()->route('todos.index')->with('success', 'Todo created successfully!');
}



    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Todo $todo)
    {
        return view('todos.edit', compact('todo'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Todo $todo)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'is_completed' => 'required|boolean',
        ]);

        $todo->update($validated);

        return redirect()->route('todos.index')->with('success', 'Todo updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Todo $todo)
    {
        $todo->delete();

        return redirect()->route('todos.index')->with('success', 'Todo deleted successfully!');
    }

}
