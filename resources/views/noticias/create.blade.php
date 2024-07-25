<x-app-layout>
    <div class="container mx-auto px-4 py-6">
        <h1 class="text-3xl font-bold mb-4">Crear Noticia</h1>
        <form action="{{ route('noticias.store') }}" method="POST" enctype="multipart/form-data" id="newsForm" class="bg-white shadow-md rounded-lg p-6">
            @csrf
            <div class="mb-4">
                <label for="title" class="block text-gray-700 font-semibold mb-2">Título</label>
                <input type="text" name="title" id="title" class="w-full border border-gray-300 rounded-lg p-2" required>
            </div>
            <div class="mb-4">
                <label for="content" class="block text-gray-700 font-semibold mb-2">Contenido</label>
                <textarea name="content" id="content" class="w-full border border-gray-300 rounded-lg p-2" rows="4" required></textarea>
            </div>
            <div class="mb-4">
                <label for="image" class="block text-gray-700 font-semibold mb-2">Imagen</label>
                <input type="file" name="image" id="image" class="w-full border border-gray-300 rounded-lg p-2">
            </div>
            <div class="mb-4">
                <label for="roles" class="block text-gray-700 font-semibold mb-2">Roles</label>
                <select name="roles[]" id="roles" class="w-full border border-gray-300 rounded-lg p-2" multiple>
                    @foreach ($roles as $role)
                        <option value="{{ $role->id }}">{{ $role->name }}</option>
                    @endforeach
                </select>
            </div>
            
            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded shadow hover:bg-blue-600">Crear</button>
        </form>
    </div>

    <!-- SweetAlert2 -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        document.getElementById('newsForm').addEventListener('submit', function(e) {
            e.preventDefault(); // Prevent the default form submission

            Swal.fire({
                title: '¿Estás seguro?',
                text: '¿Quieres crear esta noticia?',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Sí, crear',
                cancelButtonText: 'Cancelar'
            }).then((result) => {
                if (result.isConfirmed) {
                    this.submit(); // Submit the form if confirmed
                }
            });
        });

        // Check for success message
        @if (session('success'))
            Swal.fire({
                title: 'Éxito',
                text: '{{ session('success') }}',
                icon: 'success',
                confirmButtonText: 'OK'
            });
        @endif
    </script>
</x-app-layout>
