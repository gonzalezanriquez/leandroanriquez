<x-Modal>
    <!-- Contenido del modal -->
    <h2 class="text-2xl font-semibold mb-4">Edit User</h2>
    <!-- ... Agrega aquí el contenido del formulario o lo que desees ... -->

    <!-- Botón de cierre del modal -->
    <button @click="open = false" class="absolute top-0 right-0 p-4">
        <svg class="w-6 h-6 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
        </svg>
    </button>
</x-Modal>