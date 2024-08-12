@extends('layouts.task')

@section('content')
<nav
    class="relative px-4 py-2 flex justify-between items-center bg-white dark:bg-gray-800 border-b-2 dark:border-gray-600">

    <a class="text-2xl font-bold text-violet-600 dark:text-white" href="#">
        Liste des Tâches
    </a>
</nav>
<br>

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



