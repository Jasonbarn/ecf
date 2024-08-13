@extends('layouts.task')

@section('content')
<body style="background-color: rgb(229, 155, 17) ;">
<div class="container mx-auto mt-8">
    <nav class="px-6 py-4 bg-white rounded-lg shadow-md flex justify-between items-center">
        <a class="text-2xl font-bold text-yellow-600" href="#">
            Liste des Tâches
        </a>
        <a href="{{ route('tasks.create') }}">
            <button class="bg-gradient-to-r from-purple-400 to-yellow-500 text-white font-bold py-2 px-4 rounded">
                Créer une nouvelle tâche
            </button>
        </a>
    </nav>

    <div class="mt-6">
        @forelse ($tasks as $task)
            <div class="bg-white p-4 rounded-lg shadow-md mb-4">
                <div class="flex justify-between items-center">
                    <div>
                        <h3 class="font-bold text-lg">{{ $task->title }}</h3>
                        <p class="text-gray-600">{{ $task->description }}</p>
                    </div>
                    <div class="flex space-x-2">
                        <a href="{{ route('tasks.edit', $task->id) }}" class="bg-yellow-500 hover:bg-purple-700 text-white font-bold py-2 px-4 rounded transition duration-300 ease-in-out">
                            Modifier
                        </a>
                        <form action="{{ route('tasks.destroy', $task->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="bg-red-500 hover:bg-purple-700 text-white font-bold py-2 px-4 rounded transition duration-300 ease-in-out">
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

