@extends('layouts.task')

@section('content')
<body style="background-color:   rgb(218, 147, 109);">
    
    <div class="container mx-auto p-6">
        <div class="bg-white border border-gray-300 rounded-lg shadow-lg">
            <div class="flex items-center justify-between px-6 py-4 border-b border-gray-300">
                <a class="text-2xl font-bold text-orange-500" href="#">
                    Créer une nouvelle tâche
                </a>
            </div>


<form action="{{ route('tasks.store') }}" method="POST">
    @csrf 
    <div>
        <label for="title" class="block mb-2 text-sm font-medium text-gray-900">Titre :</label>
        <input type="text" name="title" id="title" value="{{ old ('title') }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>
        @error('title')
            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
        @enderror
    </div>
    <div> <div class="mb-6">
        <label for="description" class="block mb-2 text-sm font-medium text-gray-900">Description :</label>
        <textarea name="description" id="description" rows="4" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">{{ old('description') }}</textarea>
    </div>
    
    
            <button type="submit" class="text-white bg-gradient-to-r from-green-400 to-blue-500 hover:bg-gradient-to-br focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">Enregistrer</button>
</form>


<a href="{{ route('tasks.index') }}" class="text-white bg-gradient-to-r from-red-400 to-yellow-500 hover:bg-gradient-to-br focus:ring-4 focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">
    Retour à la liste des tâches
</a>
</a>
@endsection