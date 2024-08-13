<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    // Affiche toutes les tâches sur la page d'accueil
    public function accueil()
    {
        return view('accueil');
    
    }

    // Affiche toutes les tâches
    public function index(Task $task)
    {
        $tasks = Task::all();  // Récupère toutes les tâches de la base de données
        return view('taches', compact('tasks'));  // Passe les tâches à la vue
     
    }

    // Montre le formulaire pour créer une nouvelle tâche
    public function create(Task $task)
    {
        return view('tasks.create');
    }

    // Enregistre une nouvelle tâche dans la base de données
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|max:255',
            'description' => 'nullable',
        ]);
        Task::create($validated);

        return redirect()->route('tasks.index');  // Redirige après la création vers la route tasks index
    }

    // Montre le formulaire pour éditer une tâche existante
    public function edit(Task $task)
    {
        return view('tasks.edit', compact('task'));
    }


    // Met à jour une tâche existante dans la base de données
    public function update(Request $request, Task $task)
    {
        $validated = $request->validate([
            'title' => 'required|max:255',
            'description' => 'nullable',
        ]);

        $task->update($validated);

        return redirect()->route('tasks.index');  // Redirige vers la vue accueil après la mise à jour de la tâche
    }

    // Supprime une tâche de la base de données
    public function destroy(Task $task)
{
     // Supprime la tâche
    if ($task->delete()) {  
    return view ('supprimer');//redirige vers la la page supprimé
}
}
}








    






    



