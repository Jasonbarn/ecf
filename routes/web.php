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



//route menant vers la page d'accueil 
Route::get('/accueil', [TaskController::class, 'index'])->name('accueil');
//Route menant vers la liste des tâches
Route::get('/taches', [TaskController::class, 'accueil'])->name('tasks.accueil');
//route pour la creation 
Route::get('/taches/create', [TaskController::class, 'create'])->name('tasks.create');
//
Route::post('/taches/store/', [TaskController::class, 'store'])->name('tasks.store');
//
Route::get('/taches/edit/{task}', [TaskController::class, 'edit'])->name('tasks.edit');
//
Route::put('/taches/update/{task}', [TaskController::class, 'update'])->name('tasks.update');
//
Route::delete('/taches/destroy/{task}', [TaskController::class, 'destroy'])->name('tasks.destroy');


require __DIR__.'/auth.php';
