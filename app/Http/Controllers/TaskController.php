<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function accueil (Task $task)
    {
        //renvoie des taches  dans la base de données vers la vue accueil
        $tasks = Task::all();
        return view('home',compact('tasks'));
    }

    //fonctionpour la création de nouvelles tâches
    public function create (Task $task)
    {
        return view('tasks.create');
    }

    // public function store(Request $request)
    // {
    //     $validated = $request->validate([
    //         'title' => 'required|max:255',
    //         'description' => 'nullable',
    //     ]);
    //     Task::create($validated);

    //     return redirect()->route('tasks.accueil');
    // }


    //modification des tâches
    public function edit (Task $task)
    {
        return view('tasks.edit', compact('task'));
    }

        //ajouts de nouvelles taches
    public function update (Request $request,Task $task)
    {
        $validated = $request->validate([
            'title' => 'required|max:255',
            'description' => 'nullable',
        ]);

        $task->update($validated);

        return redirect()->route('tasks.accueil');
    }

     //suppression de taches et redirection 
    public function destroy (Task $task)
    {

        $task->delete();
        return redirect()->route('task.accueil');
    }
}







    



