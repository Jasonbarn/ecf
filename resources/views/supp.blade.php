@extends('layouts.app')

@section('content')
<h1>Modifier la tâche</h1>

<form action="{{ route('tasks.update', $task->id) }}" method="POST">
    @csrf
    @method('get')
    <div>
        <label for="title">Titre :</label>
        <input type="text" name="title" id="title" value="{{ $task->title }}">
        @error('title')
            <div>{{ $message }}</div>
        @enderror
    </div>
    <div>
        <label for="description">Description :</label>
        <textarea name="description" id="description">{{ $task->description }}</textarea>
    </div>
    <button type="submit">Mettre à jour</button>
</form>

<a href="{{ route('tasks.accueil') }}">Retour à la liste des tâches</a>
@endsection
