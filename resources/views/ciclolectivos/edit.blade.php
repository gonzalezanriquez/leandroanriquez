<x-app-layout>
    <div class="min-h-screen flex items-center justify-center py-12 px-4 sm:px-6 lg:px-8">
        <div class="max-w-md w-full space-y-8">
            <div>
                <h2 class="mt-6 text-center text-3xl font-extrabold text-gray-900">
                    Editar Ciclo Lectivo
                </h2>
            </div>
            <!-- Formulario de Edición -->
            <form id="edit-form" class="mt-8 space-y-6" action="{{ route('ciclolectivos.update', $ciclolectivo) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="rounded-md shadow-sm -space-y-px">
                    <div>
                        <label for="anio" class="sr-only">Año</label>
                        <input id="anio" name="anio" type="number" autocomplete="anio" value="{{ old('anio', $ciclolectivo->anio) }}" required
                               class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-t-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm"
                               placeholder="Año">
                    </div>
                </div>
                @error('anio')
                    <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                @enderror
                <div>
                    <button type="button" onclick="confirmUpdate()" class="group relative w-full flex justify-center py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                        Actualizar Ciclo Lectivo
                    </button>
                </div>
            </form>
        </div>
    </div>

    <!-- Script para SweetAlert -->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        function confirmUpdate() {
            Swal.fire({
                title: "¿Seguro deseas actualizar este ciclo?",
                text: "Confirma para guardar los cambios",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#fcba03",
                cancelButtonColor: "#d33",
                confirmButtonText: "Sí, actualizar!",
                cancelButtonText: 'Cancelar'
            }).then((result) => {
                if (result.isConfirmed) {
                    // Envía el formulario si el usuario confirma
                    document.getElementById('edit-form').submit();
                }
            });
        }
    </script>
</x-app-layout>
