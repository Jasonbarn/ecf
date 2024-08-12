@extends('layouts.task')

@section('content')
<h1>Modifier la tâche</h1>

<form action="{{ route('tasks.update', $task->id) }}" method="POST">
    @csrf
    @method('get')
    <div>
        <label for="title">Titre :</label>
        <input type="text" name="title" id="title" value="{{ $task->title }}">
        @error('title')
            <div>{{ $description }}</div>
        @enderror
    </div>
    <div>
        <label for="description">Description :</label>
        <textarea name="description" id="description">{{ $task->description }}</textarea>
    </div>
    <button type="submit" class="bg-gradient-to-r from-green-400 to-blue-500 text-white font-bold py-2 px-4 rounded">
                Mettre à jour
                </button>

</form>

<a href="{{ route('tasks.accueil') }}">Retour à la liste des tâches</a>
@endsection
