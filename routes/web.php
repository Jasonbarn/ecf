<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\ProfileController;

// Route::get('/', function () {
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

//route des tasks  avec leurs controllers et vue pour créer,visualier,modifier et supprimer les tâches
Route::get('/home', [TaskController::class, 'accueil'])->name('tasks.accueil');
Route::get('/home/create', [TaskController::class, 'create'])->name('tasks.create');
Route::post('/home/store', [TaskController::class, 'store'])->name('tasks.store');
Route::get('/home/{task}/edit', [TaskController::class, 'edit'])->name('tasks.edit');
Route::post('/home/update/{task}', [TaskController::class, 'update'])->name('tasks.update');
Route::post('/home/destroy/{task}', [TaskController::class, 'destroy'])->name('tasks.destroy');


require __DIR__.'/auth.php';
