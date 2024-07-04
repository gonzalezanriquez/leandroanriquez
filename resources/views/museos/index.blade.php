<x-app-layout>
    <div class="container mx-auto py-8">
        <h1 class="text-3xl font-bold mb-6 text-center">Museos Disponibles para Visitar</h1>
        
        <p class="mb-4 text-center badge">Número de museos encontrados: <span class="inline-flex items-center rounded-md bg-green-50 px-2 py-1 text-xs font-medium text-green-700 ring-1 ring-inset ring-green-600/20">{{ count($museos['results']) }}</span>
            </p>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach($museos['results'] as $museo)
                <div class="bg-white rounded-lg shadow-md p-6">
                    <img src="{{asset('img/museo.png')}}" alt="">
                    <h2 class="text-xl font-bold mb-2">{{ $museo['nombre'] }}</h2>
                    <p>{!! \Illuminate\Support\Str::limit(htmlspecialchars_decode(strip_tags($museo['descripcion'])), 200) !!}</p>
                    <!-- Limito a aproximadamente 200 caracteres -->
                    <p class="text-red-900"><strong>Dirección:</strong> {{ $museo['direccion'] }}</p>
                    <p class="text-amber-600"><strong>Teléfono:</strong> {{ $museo['telefono'] }}</p>
                    <a href="{{ $museo['link'] }}" target="_blank" class="text-blue-500 hover:underline mt-4 block">Más información</a>
                </div>
            @endforeach
        </div>
    </div>

    
</x-app-layout>
