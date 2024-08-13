<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\ProfileController;

// Route::get('/accueil', function () {
//     return view('accueil');
// });

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});



// Route menant vers la page d'accueil du site
Route::get('/', [TaskController::class, 'index'])->name('accueil');

// Route menant vers la liste des tâches existantes
Route::get('/taches', [TaskController::class, 'accueil'])->name('tasks.accueil');

// Route pour afficher le formulaire de création de nouvelle tâche
Route::get('/taches/create', [TaskController::class, 'create'])->name('tasks.create');

// Route pour enregistrer une nouvelle tâche dans la base de données
Route::post('/taches/store/', [TaskController::class, 'store'])->name('tasks.store');

// Route pour afficher le formulaire de modification d'une tâche existante
Route::get('/taches/edit/{task}', [TaskController::class, 'edit'])->name('tasks.edit');

// Route pour mettre à jour une tâche existante dans la base de données
Route::put('/taches/update/{task}', [TaskController::class, 'update'])->name('tasks.update');

// Route pour supprimer une tâche existante de la base de données
Route::delete('/taches/destroy/{task}', [TaskController::class, 'destroy'])->name('tasks.destroy');


require __DIR__.'/auth.php';
