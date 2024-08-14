@extends('layouts.task')

@section('content')
<body style="background: linear-gradient(to right, #2d353e, #072d59);"> 
    <div class="container mx-auto p-6">
        <div class="bg-white border border-gray-300 rounded-lg shadow-lg">
            <div class="flex items-center justify-between px-6 py-4 border-b border-gray-300">
                <a class="text-2xl font-bold text-blue-700" href="#"> 
                    Créer une nouvelle tâche
                </a>
            </div>

            <form action="{{ route('tasks.store') }}" method="POST">
                @csrf 
                <div>
                    <label for="title" class="block mb-2 text-sm font-medium text-gray-900">Titre :</label>
                    <input type="text" name="title" id="title" value="{{ old('title') }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-400 focus:border-blue-400 block w-full p-2.5" required> 
                    @error('title')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <div> 
                    <div class="mb-6">
                        <label for="description" class="block mb-2 text-sm font-medium text-gray-900">Description :</label>
                        <textarea name="description" id="description" rows="4" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-400 focus:border-blue-400 block w-full p-2.5">{{ old('description') }}</textarea>
                    </div>
                </div>
            </form>

<button type="submit" class="text-white bg-gradient-to-r from-teal-400 to-blue-500 hover:bg-gradient-to-br focus:ring-4 focus:ring-blue-200 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">Enregistrer</button> 
            <a href="{{ route('tasks.index') }}" class="text-white bg-gradient-to-r from-purple-400 to-blue-500 hover:bg-gradient-to-br focus:ring-4 focus:ring-purple-200 font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                Retour à la liste des tâches
            </a>
        </div>
    </div>
</body>
@endsection

