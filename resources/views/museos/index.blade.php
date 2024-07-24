<x-app-layout>
    <div class="container mx-auto py-8">
        <h1 class="text-3xl font-bold mb-6 text-center">Museos Disponibles para Visitar</h1>
        
        <p class="mb-4 text-center badge">Número de museos encontrados: <span class="inline-flex items-center rounded-md bg-green-50 px-2 py-1 text-xs font-medium text-green-700 ring-1 ring-inset ring-green-600/20">{{ count($museos['results']) }}</span>
            </p>
        <div class="grid grid-cols-1 md:grid-cols-1 lg:grid-cols-2 gap-6">
            @foreach($museos['results'] as $museo)
            <div class="bg-white border rounded-xl shadow-sm sm:flex dark:bg-neutral-900 dark:border-neutral-700 dark:shadow-neutral-700/70">
                <div class="shrink-0 relative w-full rounded-t-xl overflow-hidden pt-[40%] sm:rounded-s-xl sm:max-w-60 md:rounded-se-none md:max-w-xs">
                  <img class="size-full absolute top-0 start-0 object-cover" src="{{asset('img/museo.png')}}" alt="Card Image">
                </div>
                <div class="flex flex-wrap">
                  <div class="p-4 flex flex-col h-full sm:p-7">
                    <h3 class="text-lg font-bold text-gray-800 dark:text-white">
                        {{ $museo['nombre'] }}
                    </h3>
                    <p class="mt-1 text-gray-500 dark:text-neutral-400">
                        {!! \Illuminate\Support\Str::limit(htmlspecialchars_decode(strip_tags($museo['descripcion'])), 200) !!}                    </p>
                    <div class="mt-5 sm:mt-auto">
                      <p class="text-xs text-gray-500 dark:text-neutral-500">
                        <strong>Dirección:</strong> {{ $museo['direccion'] }}
                      </p>
                      <p class="text-xs text-gray-500 dark:text-neutral-500">
                        <strong>Telefono:</strong> {{ $museo['telefono'] }}
                      </p>
                      <a href="{{ $museo['link'] }}" target="_blank" class="text-blue-500 hover:underline mt-4 block">Más información</a>

                    </div>
                  </div>
                </div>
              </div>

              @endforeach

        </div>
    </div>

    
</x-app-layout>
