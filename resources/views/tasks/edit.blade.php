@extends('layouts.app')

@section('content')
<h1>Créer une nouvelle tâche</h1>

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
    <button type="submit">Enregistrer</button>
</form>

<br>
<a href="{{ route('tasks.accueil') }}">Retour à la liste des tâches</a>
@endsection