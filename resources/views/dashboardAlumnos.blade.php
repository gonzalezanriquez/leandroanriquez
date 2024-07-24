<x-dash-layout>

    <header class="bg-gray-50">
        <div class="mx-auto max-w-screen-xl px-4 py-8 sm:px-6 sm:py-12 lg:px-8">
          <div class="sm:flex sm:items-center sm:justify-between">
            <div class="flex items-center justify-center sm:justify-start text-center sm:text-left">
                <x-heroicon-o-rectangle-group class="w-10 h-10 mr-3" stroke-width="1" />
                <div>
                    <h1 class="text-2xl font-bold text-gray-900 sm:text-3xl">Te damos la Bienvenida, {{ auth()->user()->name }}! 👋</h1>
                    <p class="mt-1.5 text-sm text-gray-500">Este es tu espacio personal donde encontrarás las funciones que necesites.</p>
                </div>
            </div>
          </div>
        </div>
    </header>

    <div class="max-w-screen-xl mx-auto px-4 my-10 sm:px-6 lg:px-8 lg:py-14">
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-2 gap-24">
            <!-- Card 1 -->
            <a href="{{ route('noticias.index') }}" class="group flex flex-col focus:outline-none">
                <div class="relative pt-[50%] sm:pt-[70%] rounded-xl overflow-hidden shadow-xl">
                    <img class="absolute inset-0 object-cover w-full h-full transition-transform duration-500 ease-in-out rounded-xl group-hover:scale-105 group-focus:scale-105"
                        src="{{ asset('img/news.jpg') }}" alt="Noticias Image">
                    <span class="absolute top-0 end-0 rounded-se-xl rounded-es-xl text-xs font-medium bg-gray-800 text-white py-1.5 px-3 dark:bg-neutral-900">
                        NOTICIAS
                    </span>
                </div>
                <div class="mt-7 text-center">
                    <h3 class="text-xl font-semibold text-gray-800 group-hover:text-gray-600 dark:text-neutral-300 dark:group-hover:text-white">
                        NOTICIAS
                    </h3>
                    <p class="mt-3 text-xl text-gray-500 dark:text-neutral-200">
                        Accede a todas nuestras noticias y comunicados para estar al día con todo lo que necesitas saber de nuestra comunidad educativa.
                    </p>
                </div>
            </a>
            <!-- Card 2 -->
            <a href="{{ route('museos.index') }}" class="group flex flex-col focus:outline-none">
                <div class="relative pt-[50%] sm:pt-[70%] rounded-xl overflow-hidden shadow-xl">
                    <img class="absolute inset-0 object-cover w-full h-full transition-transform duration-500 ease-in-out rounded-xl group-hover:scale-105 group-focus:scale-105"
                        src="{{ asset('img/museos.jpg') }}" alt="Museos Image">
                    <span class="absolute top-0 end-0 rounded-se-xl rounded-es-xl text-xs font-medium bg-gray-800 text-white py-1.5 px-3 dark:bg-neutral-900">
                        API
                    </span>
                </div>
                <div class="mt-7 text-center">
                    <h3 class="text-xl font-semibold text-gray-800 group-hover:text-gray-600 dark:text-neutral-300 dark:group-hover:text-white">
                        MUSEOS
                    </h3>
                    <p class="mt-3 text-xl text-gray-500 dark:text-neutral-200">
                        Consulta nuestra API con el listado completo de museos y entra en el mundo del arte visitando enterándote de cada detalle.
                    </p>
                </div>
            </a>
  
          
        </div>
    </div>

</x-dash-layout>
