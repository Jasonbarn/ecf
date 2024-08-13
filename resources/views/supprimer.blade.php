@extends('layouts.task')
@section('content')

<body style="background-color: rgb(221, 216, 168) ;">
<div class="bg-white p-4 rounded-lg shadow-md mb-4 flex justify-between items-center"><h6>Tâche supprimée avec succès</h6>               

<a href="{{ route('tasks.index') }}">
    <button class="bg-gradient-to-r from-purple-400 to-yellow-500 text-white font-bold py-2 px-4 rounded">
    Retour a la page des tâches
    </button>

@endsection