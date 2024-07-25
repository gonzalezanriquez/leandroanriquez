<x-app-layout>
    <section class="container mx-auto px-4">
        <div class="flex items-center justify-between gap-x-3">
            <div class="flex items-center gap-x-3">
                <x-heroicon-o-folder-plus class="w-6 h-6" stroke-width="1" />
                <h2 class="text-lg font-medium text-gray-800 dark:text-white tracking-wider">Noticias</h2>
                <span class="px-3 py-1 text-xs text-blue-600 bg-blue-100 rounded-full dark:bg-gray-800 dark:text-blue-400">{{ $noticias->count() }} noticias</span>
            </div>
            <a href="{{ route('noticias.create') }}">
                <button class="inline-flex items-center justify-center gap-1.5 rounded-lg border border-gray-200 bg-white px-3 py-2 text-gray-500 transition hover:text-gray-700 focus:outline-none focus:ring text-sm">
                    <span class="font-medium">Crear Noticia</span>
                    <x-heroicon-o-plus class="w-4 h-4" stroke-width="1" />
                </button>
            </a>
        </div>

        <div class="flex flex-col mt-6">
            <div class="-mx-4 -my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                <div class="inline-block min-w-full py-2 align-middle md:px-6 lg:px-8">
                    <div class="overflow-hidden border border-gray-200 dark:border-gray-700 md:rounded-lg">
                        <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
                            <thead class="bg-gray-50 dark:bg-gray-800">
                                <tr>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Título</th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Contenido</th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Destinatarios</th>
                                    <th scope="col" class="px-6 py-3 text-right text-xs font-medium text-gray-500 uppercase tracking-wider">Acciones</th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200 dark:bg-gray-900 dark:divide-gray-700">
                                @foreach ($noticias as $noticia)
                                    <tr class="hover:bg-gray-50 dark:hover:bg-gray-700">
                                        <td class="px-6 py-4 text-sm font-medium text-gray-900 dark:text-gray-300 whitespace-nowrap">
                                            {{ $noticia->title }}
                                        </td>

                                        <td class="px-6 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">
                                            {{ Str::limit($noticia->content, 50) }} <!-- Limit the content length for display -->
                                        </td>
                                        <td class="px-6 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">
                                            @foreach ($noticia->roles as $role)
                                                <span class="inline-block px-2 py-1 text-xs font-medium text-white bg-gray-800 rounded-full dark:bg-gray-700 dark:text-white">{{ $role->name }}</span>
                                            @endforeach
                                        </td>
                                        <td class="px-6 py-4 text-sm font-medium text-gray-700 dark:text-gray-300 whitespace-nowrap text-right">
                                            <div class="flex items-center justify-end gap-x-3">
                                                <a href="{{ route('noticias.edit', $noticia) }}" class="px-3 py-1 text-sm text-yellow-600 bg-yellow-100 rounded-full hover:text-white hover:bg-yellow-500 dark:bg-gray-800 dark:text-yellow-400 flex items-center gap-2">
                                                    <x-heroicon-o-pencil class="w-5 h-5" />
                                                    Editar
                                                </a>
                                                <form id="delete-form-{{ $noticia->id }}" action="{{ route('noticias.destroy', $noticia) }}" method="POST" style="display: inline;">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="button" onclick="confirmDelete({{ $noticia->id }})" class="px-3 py-1 text-sm text-red-600 bg-red-100 rounded-full hover:text-white hover:bg-red-500 dark:bg-gray-800 dark:text-red-400 flex items-center gap-2">
                                                        <x-heroicon-o-trash class="w-5 h-5" />
                                                        Eliminar
                                                    </button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        function confirmDelete(noticiaId) {
            Swal.fire({
                title: "¿Seguro deseas eliminar esta noticia?",
                text: "Esta acción no podrá revertirse",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#fcba03",
                cancelButtonColor: "#d33",
                confirmButtonText: "Sí, eliminar!",
                cancelButtonText: 'Cancelar'
            }).then((result) => {
                if (result.isConfirmed) {
                    document.getElementById('delete-form-' + noticiaId).submit();
                }
            });
        }
    </script>
</x-app-layout>
