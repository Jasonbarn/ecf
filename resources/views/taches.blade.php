@extends('layouts.task')

@section('content')

<br>
<h5>Liste des Tâches</h5> 
<br>
<hr>
<br>

<ul>
    @foreach($tasks as $task)
        <li>
            <div>{{ $task->title }}</div> 
            <div>{{ $task->description }}</div>  
            
            <a href="{{ route('tasks.edit', $task->id) }}">  <button type="submit" class="bg-gradient-to-r from-green-400 to-blue-500 text-white font-bold py-2 px-4 rounded">
                Modifier <a href="{{ route('tasks.edit', $task->id) }}"></a>
                </button></a>
                

            <form action="{{ route('tasks.destroy', $task->id) }}" method="POST" >
                @csrf
                @method('DELETE')
                
                <button type="submit" class="border border-white-500 text-white-500 font-bold py-2 px-4 rounded bg-red-400 hover:bg-red-400 text-white font-bold py-2 px-4 rounded ">
                    Supprimer
                </button>
                <hr>
                <br> <br> 
            </form>
        </li>
    @endforeach
</ul>

<a href="{{ route('tasks.create') }}">Créer une nouvelle tâche</a>

@endsection



