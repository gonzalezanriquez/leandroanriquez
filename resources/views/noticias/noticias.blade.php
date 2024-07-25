
<x-app-layout>
    <section class="container px-4 mx-auto">
        <!-- Título y botón "Crear Noticia" -->
        <div class="flex items-center justify-between mb-6">
            <h1 class="text-3xl font-bold">Noticias</h1>
           
        </div>

        <!-- Grid de noticias -->
        <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach ($noticias as $noticia)
                <div class="group flex flex-col focus:outline-none">
                    <a href="{{ route('noticias.show', $noticia) }}">
                        <div class="relative pt-[50%] sm:pt-[70%] rounded-xl overflow-hidden">
                            @if ($noticia->image)
                                <img class="absolute inset-0 object-cover w-full h-full transition-transform duration-500 ease-in-out rounded-xl group-hover:scale-105 group-focus:scale-105"
                                src="{{ asset('storage/' . $noticia->image) }}" alt="{{ $noticia->title }}">
                                <span class="absolute top-0 end-0 rounded-se-xl rounded-es-xl text-xs font-medium bg-gray-800 text-white py-1.5 px-3 dark:bg-neutral-900">
                                    {{ $userRol}}
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
                            <button type="button" class="mt-5 py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-amber-400 text-black hover:bg-yellow-600 focus:outline-none focus:bg-yellow-600 disabled:opacity-50 disabled:pointer-events-none">
                                Leer más
                            </button>
                        </div>
                    </a>

                   
                
                </div>
            @endforeach
        </div>
    </section>
</x-app-layout>

