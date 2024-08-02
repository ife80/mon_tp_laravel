<?php

namespace App\Http\Controllers;

use App\Models\Task;
use App\Models\Category;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index(Request $request)
    {
        // Récupérer les paramètres de filtrage
        $categoryId = $request->input('category');
        $status = $request->input('status');
        $search = $request->input('search');

        // Initialiser la requête pour les tâches
        $query = Task::query();

        // Filtrage par catégorie
        if ($categoryId) {
            $query->where('category_id', $categoryId);
        }

        // Filtrage par statut
        if ($status) {
            $query->where('status', $status);
        }

        // Filtrage par recherche textuelle
        if ($search) {
            $query->where('title', 'like', "%{$search}%")
                  ->orWhere('description', 'like', "%{$search}%");
        }

        // Récupérer les tâches avec la catégorie associée
        $tasks = $query->with('category')->get();

        // Récupérer toutes les catégories pour le filtrage
        $categories = Category::all();

        return view('tasks.index', compact('tasks', 'categories'));
    }

    public function create()
    {
        $categories = Category::all();
        return view('tasks.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'status' => 'required',
            'category_id' => 'required|exists:categories,id',
        ]);

        Task::create($request->all());
        return redirect()->route('tasks.index');
    }

    public function show(Task $task)
    {
        return view('tasks.show', compact('task'));
    }

    public function edit(Task $task)
    {
        $categories = Category::all();
        return view('tasks.edit', compact('task', 'categories'));
    }

    public function update(Request $request, Task $task)
    {
        $request->validate([
            'title' => 'required',
            'status' => 'required',
            'category_id' => 'required|exists:categories,id',
        ]);

        $task->update($request->all());
        return redirect()->route('tasks.index');
    }

    public function destroy(Task $task)
    {
        $task->delete();
        return redirect()->route('tasks.index');
    }
}
