<x-app-layout>
    <div class="min-h-screen flex items-center justify-center py-12 px-4 sm:px-6 lg:px-8">
        <div class="max-w-md w-full space-y-8">
            <div>
                <h2 class="mt-6 text-center text-3xl font-extrabold text-gray-900">
                    Editar Curso
                </h2>
            </div>
            <form id="edit-form" action="{{ route('cursos.update', $curso->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="rounded-md shadow-sm -space-y-px">
                    <div>
                        <label for="curso" class="sr-only">Curso</label>
                        <input id="curso" name="curso" type="text" value="{{ old('curso', $curso->curso) }}" required
                               class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-t-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm"
                               placeholder="Curso">
                    </div>
                    <div>
                        <label for="nivel" class="sr-only">Nivel</label>
                        <input id="nivel" name="nivel" type="text" value="{{ old('nivel', $curso->nivel) }}" required
                               class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-t-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm"
                               placeholder="Nivel">
                    </div>
                </div>
                @error('curso')
                    <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                @enderror
                @error('nivel')
                    <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                @enderror
                <div>
                    <button type="button" onclick="confirmUpdate()"
                            class="group relative w-full flex justify-center py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                        Actualizar Curso
                    </button>
                </div>
            </form>
        </div>
    </div>

    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        function confirmUpdate() {
            Swal.fire({
                title: "¿Seguro deseas actualizar este curso?",
                text: "Esta acción actualizará el curso con los nuevos datos.",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#fcba03",
                cancelButtonColor: "#d33",
                confirmButtonText: "Sí, actualizar!",
                cancelButtonText: 'Cancelar'
            }).then((result) => {
                if (result.isConfirmed) {
                    document.getElementById('edit-form').submit();
                }
            });
        }
    </script>
</x-app-layout>
