@extends('layouts.task')

@section('content')
<h1>Création  d'une nouvelle tâche</h1>

<form action="{{ route('tasks.store') }}" method="POST">
    @csrf
    <div>
        <label for="title">Titre :</label>
        <input type="text" name="title" id="title" value="{{ old('title') }}">
        @error('title')
            <div>{{ $title }}</div>
        @enderror
    </div>
    <div>
        <label for="description">Description :</label>
        <textarea name="description" id="description">{{ old('description') }}</textarea>
    </div>
        <button type="submit" class="bg-gradient-to-r from-red-400 to-yellow-500 text-white font-bold py-2 px-4 rounded">
            Enregristrer
        </button>
</form>

<br>
<a href="{{ route('tasks.accueil') }}"> <button class="bg-gradient-to-r from-blue-400 to-indigo-500 text-white font-bold py-2 px-4 rounded">
    Retour à la liste des tâches
</button></a>
@endsection