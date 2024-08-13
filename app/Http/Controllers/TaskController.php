<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{

    public function accueil()// Affiche toutes les tâches sur la page d'accueil
    {
    return view('accueil');
    
    }



    
    public function index(Task $task)// Affiche toutes les tâches
    {
        $tasks = Task::all(); // Récupère toutes les tâches de la base de données

        return view('taches', compact('tasks'));  // Passe les tâches à la vue
    
    }




    public function create(Task $task)// Montre le formulaire pour créer une nouvelle tâche
    {
        return view('tasks.create');
    }




    public function store(Request $request)// Enregistre une nouvelle tâche dans la base de données
    {

    //envoie une rêquete pour permettre de créer le titre et la description voulue
        $validated = $request->validate([
            'title' => 'required|max:255',
            'description' => 'nullable',
        ]);
        Task::create($validated);

    // Redirige après la création vers la route tasks index
        return redirect()->route('tasks.index');  

    }




    // Montre le formulaire pour éditer une tâche existante
    public function edit(Task $task)
    {
        return view('tasks.edit', compact('task'));
    }




    public function update(Request $request, Task $task)// Met à jour une tâche existante dans la base de données
    {

    //envoie une rêquete pour permettre de mettre a jour le titre et la description voulue
        $validated = $request->validate([
            'title' => 'required|max:255',
            'description' => 'nullable',
        ]);

        $task->update($validated);

    // Redirige vers la vue accueil après la mise à jour de la tâche
        return redirect()->route('tasks.index'); 
        

    }


    public function destroy(Task $task)// Supprime une tâche de la base de données
{

     // Supprime la tâche
    if ($task->delete()) {  
    return view ('supprimer');//redirige vers la  page supprimé
}
}
}



















