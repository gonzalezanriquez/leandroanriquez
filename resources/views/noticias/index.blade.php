<x-app-layout>
    <div class="container mx-auto px-4 py-6">
        <h1 class="text-3xl font-bold mb-4">Noticias</h1>

        <a href="{{ route('noticias.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded shadow hover:bg-blue-600">Crear Noticia</a>

        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6 mt-6">
            @foreach ($noticias as $noticia)
                <div class="bg-white shadow-md rounded-lg overflow-hidden">
                    @if ($noticia->image)
                        <img src="{{ asset($noticia->image) }}" class="w-full h-48 object-cover" alt="{{ $noticia->title }}">
                    @endif
                    <div class="p-4">
                        <h2 class="text-xl font-semibold mb-2">{{ $noticia->title }}</h2>
                        <p class="text-gray-700 mb-4">{{ Str::limit($noticia->content, 100) }}</p>
                        <a href="{{ route('noticias.edit', $noticia->id) }}" class="bg-blue-500 text-white px-3 py-1 rounded shadow hover:bg-blue-600">Editar</a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</x-app-layout>
