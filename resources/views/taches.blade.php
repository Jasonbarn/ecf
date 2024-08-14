@extends('layouts.task')

@section('content')
<body style="background: linear-gradient(to right, #000000, #1c3d5a);"> 
<div class="container mx-auto mt-8">
    <nav class="px-6 py-4 bg-white rounded-lg shadow-md flex justify-between items-center">
        <a class="text-2xl font-bold text-blue-800" href="#">
            Liste des Tâches
        </a>
        <a href="{{ route('accueil') }}">
            <button class="bg-gray-700 hover:bg-gray-800 text-white font-bold py-2 px-4 rounded">
            Retour à la page d'accueil
            </button>
        </a>
        <a href="{{ route('tasks.create') }}">
            <button class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                Créer une nouvelle tâche
            </button>
        </a>
    </nav>

    <div class="mt-6">
        @forelse ($tasks as $task)
            <div class="bg-white p-4 rounded-lg shadow-md mb-4">
                <div class="flex justify-between items-center">
                    <div>
                        <h3 class="font-bold text-lg text-gray-800">{{ $task->title }}</h3>
                        <p class="text-gray-600">{{ $task->description }}</p>
                    </div>
                    <div class="flex space-x-2">
                        <a href="{{ route('tasks.edit', $task->id) }}" class="bg-gradient-to-r from-teal-400 to-blue-500 hover:from-teal-500 hover:to-blue-600 text-white font-bold py-2 px-4 rounded transition duration-300 ease-in-out flex items-center">
                            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 4H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2v-4M11 4h7m0 0l-2 2m2-2l-9 9"></path></svg>
                            Modifier
                        </a>
                        <form action="{{ route('tasks.destroy', $task->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="bg-gradient-to-r from-red-500 to-red-700 hover:from-red-600 hover:to-red-800 text-white font-bold py-2 px-4 rounded transition duration-300 ease-in-out flex items-center">
                                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-7 7-7-7"></path></svg>
                                Supprimer
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        @empty
            <p class="text-center text-gray-500">Aucune tâche disponible. Créez-en une nouvelle.</p>
        @endforelse
    </div>
</div>

</body>
@endsection


