@extends('layouts.task')
@section('content')

<body style="background: linear-gradient(to right, #1c3d5a, #000000);"> 
    <div class="bg-white p-4 rounded-lg shadow-md mb-4 flex justify-between items-center">
        <h6 class="text-blue-700 font-bold">Tâche supprimée avec succès</h6> 
        <a href="{{ route('tasks.index') }}">
            <button class="bg-gradient-to-r from-purple-400 to-blue-500 text-white font-bold py-2 px-4 rounded">
                Retour à la page des tâches
            </button>
        </a>
    </div>
</body>

@endsection

