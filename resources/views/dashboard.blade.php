<x-dash-layout>
<header class="bg-gray-50">
    <div class="mx-auto max-w-screen-xl px-4 py-8 sm:px-6 sm:py-12 lg:px-8">
      <div class="sm:flex sm:items-center sm:justify-between">
        <div class="flex items-center justify-center sm:justify-start text-center sm:text-left">
            <x-heroicon-o-rectangle-group class="w-10 h-10 mr-3" stroke-width="1" />
            <div>
                <h1 class="text-2xl font-bold text-gray-900 sm:text-3xl">Te damos la Bienvenida, {{ auth()->user()->nombre }}! 👋</h1>
                <p class="mt-1.5 text-sm text-gray-500">Aquí podrás encontrar todo lo que necesitas para la gestión de tu secretaria.</p>
            </div>
        </div>
  
        <div class="mt-4 flex flex-col gap-4 sm:mt-0 sm:flex-row sm:items-center">
         <a href={{ route('users.index') }}> <button class="inline-flex items-center justify-center gap-1.5 rounded-lg border border-gray-200 bg-white px-5 py-3 text-gray-500 transition hover:text-gray-700 focus:outline-none focus:ring" type="button">
            <span class="text-sm font-medium"> Crear nuevo Usuario </span>
            <x-heroicon-o-plus-circle class="w-4 h-4" stroke-width="1"/>
          </button></a>        
        </div>
      </div>
    </div>
  </header>
  <x-cantidad-usuarios />

  <div class="max-w-screen-xl mx-auto px-4 my-10 sm:px-6 lg:px-8 lg:py-14">
    <div class="grid grid-cols-1 sm:grid-cols-3 lg:grid-cols-3 gap-24">

        <a href="{{ route('users.index') }}" class="group flex flex-col focus:outline-none">
            <div class="relative pt-[50%] sm:pt-[70%] rounded-xl overflow-hidden shadow-xl">
                <img class="absolute inset-0 object-cover w-full h-full transition-transform duration-500 ease-in-out rounded-xl group-hover:scale-105 group-focus:scale-105"
                    src="https://cdn.tailgrids.com/2.0/image/application/images/cards/card-01/image-02.jpg" alt="Museos Image">
                <span class="absolute top-0 end-0 rounded-se-xl rounded-es-xl text-xs font-medium bg-gray-800 text-white py-1.5 px-3 dark:bg-neutral-900">
                    USUARIOS
                </span>
            </div>
            <div class="mt-7 text-center">
                <h3 class="text-xl font-semibold text-gray-800 group-hover:text-gray-600 dark:text-neutral-300 dark:group-hover:text-white">
                    GESTIONAR USUARIOS
                </h3>
                <p class="mt-3 text-xl text-gray-500 dark:text-neutral-200">
                    Accede al control de tus usuarios, editalos, asignales roles y acomodalos segun tu necesidad.
                </p>
            </div>
        </a>


        <a href="{{ route('noticias.noticias') }}" class="group flex flex-col focus:outline-none">
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
   
</x-dash-layout>
