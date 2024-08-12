@extends('layouts.task')
@section('content')


<div class="relative isolate overflow-hidden bg-gray-900 py-24 sm:py-32">
    <img src="https://images.unsplash.com/photo-1521737604893-d14cc237f11d?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&crop=focalpoint&fp-y=.8&w=2830&h=1500&q=80&blend=111827&sat=-100&exp=15&blend-mode=multiply" alt="" class="absolute inset-0 -z-10 h-full w-full object-cover object-right md:object-center">
    <div class="hidden sm:absolute sm:-top-10 sm:right-1/2 sm:-z-10 sm:mr-10 sm:block sm:transform-gpu sm:blur-3xl" aria-hidden="true">
      <div class="aspect-[1097/845] w-[68.5625rem] bg-gradient-to-tr from-[#ff4694] to-[#776fff] opacity-20" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
    </div>
    <div class="absolute -top-52 left-1/2 -z-10 -translate-x-1/2 transform-gpu blur-3xl sm:top-[-28rem] sm:ml-16 sm:translate-x-0 sm:transform-gpu" aria-hidden="true">
      <div class="aspect-[1097/845] w-[68.5625rem] bg-gradient-to-tr from-[#ff4694] to-[#776fff] opacity-20" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
    </div>
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
      <div class="mx-auto max-w-2xl lg:mx-0">
        <h2 class="text-4xl font-bold tracking-tight text-white sm:text-6xl">Bienvenue sur notre site</h2>
        <p class="mt-6 text-lg leading-8 text-gray-300">Notre site est dédier au gestionnement des tâches quotidienne</p>
      </div>
      <div class="mx-auto mt-10 max-w-2xl lg:mx-0 lg:max-w-none">
        <div class="grid grid-cols-1 gap-x-8 gap-y-6 text-base font-semibold leading-7 text-white sm:grid-cols-2 md:flex lg:gap-x-10">
          <a href="#">creation de tâches <span aria-hidden="true">&rarr;</span></a>
          <a href="#">visualisation des tâches <span aria-hidden="true">&rarr;</span></a>
          <a href="#">Modification de tâches<span aria-hidden="true">&rarr;</span></a>
          <a href="#">Suppresion des tâches<span aria-hidden="true">&rarr;</span></a>
        </div>
        <br> <br>
        <div class="flex flex-col-reverse">
            <dd class="text-2xl font-bold leading-9 tracking-tight text-white"><a href="{{route ('tasks.accueil')}}">Appuyez ici pour visualiser les tâches</a></dd>
          </div>
        </dl>
      </div>
    </div>
  </div>

  <footer class="absolute bottom-10 w-full text-white py-8 bg-gradient-to-t from-green-800 to-indigo-800">

    <div class="container mx-auto flex flex-wrap justify-between">
        <!-- Colonne 1 -->
        <div class="w-full sm:w-1/2 md:w-1/4 lg:w-1/6 px-4 mb-4">
            <h2 class="text-xl font-bold mb-4">À propos</h2>
            <ul>
                <li><a href="#" class="block hover:text-gray-300">Qui sommes-nous?</a></li>
                <li><a href="#" class="block hover:text-gray-300">Notre équipe</a></li>
                <li><a href="#" class="block hover:text-gray-300">Nos valeurs</a></li>
            </ul>
        </div>

        <!-- Colonne 2 -->
        <div class="w-full sm:w-1/2 md:w-1/4 lg:w-1/6 px-4 mb-4">
            <h2 class="text-xl font-bold mb-4">Services</h2>
         
        </div>

        <!-- Colonne 3 -->
        <div class="w-full sm:w-1/2 md:w-1/4 lg:w-1/6 px-4 mb-4">
            <h2 class="text-xl font-bold mb-4">Contact</h2>
            <ul>
                <li><a href="#" class="block hover:text-gray-300">Contactez-nous</a></li>
                <li><a href="#" class="block hover:text-gray-300">Support</a></li>
                <li><a href="#" class="block hover:text-gray-300">FAQ</a></li>
            </ul>
        </div>

        <!-- Colonne 4 -->
        <div class="w-full sm:w-1/2 md:w-1/4 lg:w-1/6 px-4 mb-4">
            <h2 class="text-xl font-bold mb-4">Réseaux sociaux</h2>
            <ul>
                <li class="flex align-items"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                        fill="currentColor" class="bi bi-facebook mt-1" viewBox="0 0 16 16">
                        <path
                            d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951" />
                    </svg><a href="#" class="block hover:text-gray-300 ml-2">Facebook</a></li>
                <li class="flex align-items"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                        fill="currentColor" class="bi bi-twitter-x mt-1" viewBox="0 0 16 16">
                        <path
                            d="M12.6.75h2.454l-5.36 6.142L16 15.25h-4.937l-3.867-5.07-4.425 5.07H.316l5.733-6.57L0 .75h5.063l3.495 4.633L12.601.75Zm-.86 13.028h1.36L4.323 2.145H2.865z" />
                    </svg><a href="#" class="block hover:text-gray-300 ml-2">Twitter</a></li>
                <li class="flex align-items"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                        fill="currentColor" class="bi bi-instagram mt-1 " viewBox="0 0 16 16">
                        <path
                            d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.9 3.9 0 0 0-1.417.923A3.9 3.9 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.9 3.9 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.9 3.9 0 0 0-.923-1.417A3.9 3.9 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599s.453.546.598.92c.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.5 2.5 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.5 2.5 0 0 1-.92-.598 2.5 2.5 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233s.008-2.388.046-3.231c.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92s.546-.453.92-.598c.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92m-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217m0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334" />
                    </svg><a href="#" class="block hover:text-gray-300 ml-2">Instagram</a></li>
            </ul>
        </div>
    </div>
    <hr class="w-4/5 mt-2 mx-auto">

    <!-- Bas de page -->
    <div class="text-center mt-8">
        <p>&copy; 2024  Tous droits réservés.</p>
    </div>
</footer>
@endsection