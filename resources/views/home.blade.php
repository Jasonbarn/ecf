@extends('layouts.app')

@section('content')
<a href="{{ route('tasks.create') }}">Créer une nouvelle tâche</a>
<h5>Liste des Tâches</h5> 
<hr>
<br>

<ul>
    @foreach($tasks as $task)
        <li>
            <div>{{ $task->title }}</div> 
            <div>{{ $task->description }}</div>  
            <a href="{{ route('tasks.edit', $task->id) }}">Modifier</a>
            <form action="{{ route('tasks.destroy', $task->id) }}" method="POST" >
                @csrf
                @method('DELETE')
                <button type="submit">Supprimer</button>
                <hr>
                <br> <br> 
            </form>
        </li>
    @endforeach
</ul>
@endsection




