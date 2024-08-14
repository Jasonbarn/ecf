@extends('layouts.task')

@section('content')
<body style="background: linear-gradient(to right, #1c3d5a, #1e5799);"> 
<div class="container mx-auto p-6">
    <div class="bg-white border border-gray-300 rounded-lg shadow-lg">
        <div class="flex items-center justify-between px-6 py-4 border-b border-gray-300">
            <a class="text-2xl font-bold text-blue-600" href="#"> 
                Modifier la tâche
            </a>
        </div>

        <form action="{{ route('tasks.update', $task->id) }}" method="POST" class="p-6">
            @csrf
            @method('PUT')
            <div class="mb-6">
                <label for="title" class="block mb-2 text-sm font-medium text-gray-900">Titre :</label>
                <input type="text" name="title" id="title" value="{{ $task->title }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>
                @error('title')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="description" class="block mb-2 text-sm font-medium text-gray-900">Description :</label>
                <textarea name="description" id="description" rows="4" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>{{ $task->description }}</textarea>
            </div>

            <div class="flex justify-between">
                <a href="{{ route('tasks.index') }}" class="text-white bg-gradient-to-r from-gray-600 to-gray-800 hover:bg-gradient-to-br focus:ring-4 focus:ring-gray-400 font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                    Retour à la liste des tâches
                </a>
                <button type="submit" class="text-white bg-gradient-to-r from-teal-400 to-blue-500 hover:bg-gradient-to-br focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                    Mise à jour
                </button>
            </div>
        </form>
    </div>
</div>
</body>
@endsection

