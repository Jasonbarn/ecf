 
@extends('layouts.task')

@section('content')

<div class="relative isolate overflow-hidden bg-gray-900 py-24 sm:py-32 h-screen w-screen flex justify-center items-center">
  
    <div class="absolute inset-0 -z-10 h-full w-full bg-cover bg-center" style="background-image: url('https://images.unsplash.com/photo-1521737604893-d14cc237f11d?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWgefHx8fGVufDB8fHx8&auto=format&fit=crop&crop=focalpoint&fp-y=.8&w=2830&h=1500&q=80&blend=111827&sat=-100&exp=15&blend-mode=multiply')"></div>

    <div class="z-10">
        <div class="text-white text-center">
            <h2 class="text-4xl font-bold tracking-tight sm:text-6xl">Bienvenue sur ecf Tasks</h2>
            <p class="mt-6 text-lg leading-8">Notre site est dédié à la gestion des tâches quotidiennes</p>
        </div>
        <div class="mt-10 space-x-4">
            <a href="#" class="inline-block bg-blue-500 text-white px-6 py-3 rounded hover:bg-blue-700 transition">Création de tâches</a>
            <a href="#" class="inline-block bg-green-500 text-white px-6 py-3 rounded hover:bg-green-700 transition">Visualisation des tâches</a>
            <a href="#" class="inline-block bg-yellow-500 text-white px-6 py-3 rounded hover:bg-yellow-700 transition">Modification de tâches</a>
            <a href="#" class="inline-block bg-red-500 text-white px-6 py-3 rounded hover:bg-red-700 transition">Suppression des tâches</a>
        </div>
    </div>
</div>
<div class="h-screen w-screen bg-black flex justify-center items-center">

  <div class="relative inline-flex  group">
      <div
          class="absolute transitiona-all duration-1000 opacity-70 -inset-px bg-gradient-to-r from-[#44BCFF] via-[#FF44EC] to-[#FF675E] rounded-xl blur-lg group-hover:opacity-100 group-hover:-inset-1 group-hover:duration-200 animate-tilt">
      </div>
      <a href="{{route ('tasks.accueil')}}" title="Get quote now"
          class="relative inline-flex items-center justify-center px-8 py-4 text-lg font-bold text-white transition-all duration-200 bg-gray-900 font-pj rounded-xl focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-900"
          role="button">Appuyez ici pour visualiser les tâches
      </a>
  </div>
</div>

@endsection