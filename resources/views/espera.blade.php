<x-dash-layout>
    <div class="flex flex-col justify-center items-center min-h-screen ">
        <div class="text-center max-w-lg mx-auto">
            <img src="https://www.svgrepo.com/show/426192/cogs-settings.svg" alt="Logo" class="mb-6 h-24 mx-auto">
            <h1 class="text-3xl md:text-4xl font-bold text-gray-700 dark:text-white mb-4">Te damos la Bienvenida, {{ auth()->user()->name }}! 👋</h1>
            <p class="text-gray-500 dark:text-gray-300 text-lg md:text-xl mb-6">Muy pronto te daremos acceso a nuestra plataforma. Mientras tanto te pedimos que completes la totalidad de tus datos para continuar.</p>
            {{-- <div class="flex flex-col sm:flex-row justify-center space-x-0 sm:space-x-4 space-y-4 sm:space-y-0">
    
                <a href="#" class="border-2 border-gray-800 text-black font-bold py-2 px-4 rounded dark:text-white dark:border-white">Completar tus datos</a>
            </div> --}}
        </div>
    </div>
</x-dash-layout>
