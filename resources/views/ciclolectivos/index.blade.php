<x-app-layout>

    <section class="container mx-auto px-4">
        <div class="flex items-center justify-between gap-x-3">
            <div class="flex items-center gap-x-3">
                <x-heroicon-o-calendar-days class="w-6 h-6" stroke-width="1" />  
                <h2 class="text-lg font-medium text-gray-800 dark:text-white tracking-wider">Ciclolectivos</h2>
                <span class="px-3 py-1 text-xs text-blue-600 bg-blue-100 rounded-full dark:bg-gray-800 dark:text-blue-400">{{ $ciclolectivos->count() }} ciclos</span>
            </div>
            <a href="{{ route('ciclolectivos.create') }}">
                <button class="inline-flex items-center justify-center gap-1.5 rounded-lg border border-gray-200 bg-white px-3 py-2 text-gray-500 transition hover:text-gray-700 focus:outline-none focus:ring text-sm">
                    <span class="font-medium">Crear nuevo Ciclolectivo</span>
                    <x-heroicon-o-plus-circle class="w-4 h-4" stroke-width="1"/>
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
                                    <th scope="col" class="py-3.5 px-4 text-sm font-normal text-left text-gray-500 dark:text-gray-400">ID</th>
                                    <th scope="col" class="py-3.5 px-4 text-sm font-normal text-left text-gray-500 dark:text-gray-400">Año</th>
                                    <th scope="col" class="px-4 py-3.5 text-sm font-normal text-left text-gray-500 dark:text-gray-400">Acción</th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200 dark:bg-gray-900 dark:divide-gray-700">
                                @foreach ($ciclolectivos as $ciclolectivo)
                                    <tr class="hover:bg-gray-50 dark:hover:bg-gray-700">
                                        <td class="px-4 py-4 text-sm font-medium text-gray-700 dark:text-gray-300 whitespace-nowrap">
                                            {{ $ciclolectivo->id }}
                                        </td>
                                        <td class="px-4 py-4 text-sm font-medium text-gray-700 dark:text-gray-300 whitespace-nowrap">
                                            {{ $ciclolectivo->anio }}
                                        </td>
                                        <td class="px-4 py-4 text-sm font-medium text-gray-700 dark:text-gray-300 whitespace-nowrap">
                                            <div class="flex items-center gap-x-3">
                                                <a href="{{ route('ciclolectivos.edit', $ciclolectivo) }}" class="px-3 py-1 text-sm text-yellow-600 bg-yellow-100 rounded-full hover:text-white hover:bg-yellow-500 dark:bg-gray-800 dark:text-yellow-400 flex items-center gap-2">
                                                    <x-heroicon-o-pencil class="w-5 h-5" />
                                                    Editar
                                                </a>
                                                <form id="delete-form-{{ $ciclolectivo->id }}" action="{{ route('ciclolectivos.destroy', $ciclolectivo) }}" method="POST" style="display: inline;">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="button" onclick="confirmDelete({{ $ciclolectivo->id }})" class="px-3 py-1 text-sm text-red-600 bg-red-100 rounded-full hover:text-white hover:bg-red-500 dark:bg-gray-800 dark:text-red-400 flex items-center gap-2">
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
        function confirmDelete(cicloId) {
            Swal.fire({
                title: "¿Seguro deseas eliminar este ciclo?",
                text: "Esta acción no podrá revertirse",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#fcba03",
                cancelButtonColor: "#d33",
                confirmButtonText: "Sí, eliminar!",
                cancelButtonText: 'Cancelar'
            }).then((result) => {
                if (result.isConfirmed) {
                    // Encuentra el formulario por el id del ciclolectivo y envíalo
                    document.getElementById('delete-form-' + cicloId).submit();
                }
            });
        }
    </script>
    

</x-app-layout>

