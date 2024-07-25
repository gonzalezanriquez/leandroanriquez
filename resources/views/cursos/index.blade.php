<x-app-layout>
    <div class="min-h-screen py-12 px-4 sm:px-6 lg:px-8">
        <div class="max-w-7xl mx-auto">
            <div class="bg-white shadow overflow-hidden sm:rounded-lg">
                <div class="px-4 py-5 sm:px-6 flex justify-between items-center">
                    <h3 class="text-lg font-medium text-gray-900">Cursos</h3>
                    <a href="{{ route('cursos.create') }}" class="px-3 py-1 text-sm text-blue-600 bg-blue-100 rounded-full hover:text-white hover:bg-blue-500 dark:bg-gray-800 dark:text-blue-400 flex items-center gap-2">
                        <x-heroicon-o-plus class="w-5 h-5" />
                        Crear Curso
                    </a>
                </div>
                <div class="border-t border-gray-200">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                            <tr>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Curso</th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Nivel</th>
                                <th scope="col" class="px-6 py-3 text-right text-xs font-medium text-gray-500 uppercase tracking-wider">Acciones</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            @foreach ($cursos as $curso)
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">{{ $curso->curso }}</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">{{ $curso->nivel }}</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                        <a href="{{ route('cursos.edit', $curso) }}" class="px-3 py-1 text-sm text-yellow-600 bg-yellow-100 rounded-full hover:text-white hover:bg-yellow-500 dark:bg-gray-800 dark:text-yellow-400 flex items-center gap-2">
                                            <x-heroicon-o-pencil class="w-5 h-5" />
                                            Editar
                                        </a>
                                        <form id="delete-form-{{ $curso->id }}" action="{{ route('cursos.destroy', $curso) }}" method="POST" style="display: inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="button" onclick="confirmDelete({{ $curso->id }})" class="px-3 py-1 text-sm text-red-600 bg-red-100 rounded-full hover:text-white hover:bg-red-500 dark:bg-gray-800 dark:text-red-400 flex items-center gap-2">
                                                <x-heroicon-o-trash class="w-5 h-5" />
                                                Eliminar
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        function confirmDelete(cursoId) {
            Swal.fire({
                title: "¿Seguro deseas eliminar este curso?",
                text: "Esta acción no podrá revertirse",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#fcba03",
                cancelButtonColor: "#d33",
                confirmButtonText: "Sí, eliminar!",
                cancelButtonText: 'Cancelar'
            }).then((result) => {
                if (result.isConfirmed) {
                    document.getElementById('delete-form-' + cursoId).submit();
                }
            });
        }
    </script>
</x-app-layout>
