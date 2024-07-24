<x-app-layout>
    <h1 class="text-3xl font-bold mb-4">Noticias</h1>
    <span class="text-3xl font-bold mb-4 inline-flex items-center gap-x-1.5 py-1.5 px-3 rounded-full text-xs font-medium bg-gray-800 text-white dark:bg-white dark:text-neutral-800">Noticias</span>

    <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6 align-center">
        @foreach ($noticias as $noticia)
            <a class="group flex flex-col focus:outline-none" href="{{ route('noticias.show', $noticia) }}">
                <div class="relative pt-[50%] sm:pt-[70%] rounded-xl overflow-hidden">
                    @if ($noticia->image)
                        <img class="absolute inset-0 object-cover w-full h-full transition-transform duration-500 ease-in-out rounded-xl group-hover:scale-105 group-focus:scale-105"
                            src="{{ asset($noticia->image) }}" alt="{{ $noticia->title }}">
                        <span class="absolute top-0 end-0 rounded-se-xl rounded-es-xl text-xs font-medium bg-gray-800 text-white py-1.5 px-3 dark:bg-neutral-900">
                            Rol
                        </span>
                    @endif
                </div>
    
                <div class="mt-7">
                    <h3 class="text-xl font-semibold text-gray-800 group-hover:text-gray-600 dark:text-neutral-300 dark:group-hover:text-white">
                        {{ $noticia->title }}
                    </h3>
                    <p class="mt-3 text-gray-800 dark:text-neutral-200">
                        {{ Str::limit($noticia->content, 100) }}
                    </p>
                    <!-- Botón "Leer más" dentro del enlace -->
                    <button type="button" class="py-3 px-4 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-amber-400 text-black hover:bg-yellow-600 focus:outline-none focus:bg-yellow-600 disabled:opacity-50 disabled:pointer-events-none">
                        Leer más
                    </button>
                </div>
            </a>
        @endforeach
    </div>
    




















</x-app-layout>
