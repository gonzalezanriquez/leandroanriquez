<x-app-layout>
    <section class="container mx-auto px-4">
        <div class="flex items-center justify-between gap-x-3">
            <div class="flex items-center gap-x-3">
                <x-heroicon-o-folder-plus class="w-6 h-6" stroke-width="1" />
                <h2 class="text-lg font-medium text-gray-800 dark:text-white tracking-wider">Mensajes de Contacto</h2>
                <span class="px-3 py-1 text-xs text-blue-600 bg-blue-100 rounded-full dark:bg-gray-800 dark:text-blue-400">{{ $messages->count() }} mensajes</span>
            </div>
        </div>

        <div class="flex flex-col mt-6">
            <div class="-mx-4 -my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                <div class="inline-block min-w-full py-2 align-middle md:px-6 lg:px-8">
                    <div class="overflow-hidden border border-gray-200 dark:border-gray-700 md:rounded-lg">
                        <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
                            <thead class="bg-gray-50 dark:bg-gray-800">
                                <tr>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Nombre</th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Correo Electrónico</th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Consulta</th>
                                    <th scope="col" class="px-6 py-3 text-right text-xs font-medium text-gray-500 uppercase tracking-wider">Acciones</th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200 dark:bg-gray-900 dark:divide-gray-700">
                                @foreach ($messages as $message)
                                    <tr class="hover:bg-gray-50 dark:hover:bg-gray-700">
                                        <td class="px-6 py-4 text-sm font-medium text-gray-900 dark:text-gray-300 whitespace-nowrap">
                                            {{ $message->name }}
                                        </td>
                                        <td class="px-6 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">
                                            {{ $message->email }}
                                        </td>
                                        <td class="px-6 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">
                                            {{ Str::limit($message->message, 50) }}
                                        </td>
                                        <td class="px-6 py-4 text-sm font-medium text-gray-700 dark:text-gray-300 whitespace-nowrap text-right">
                                            <div class="flex items-center justify-end gap-x-3">
                                                <a href="{{ route('contact.show', $message) }}" class="px-3 py-1 text-sm text-blue-600 bg-blue-100 rounded-full hover:text-white hover:bg-blue-500 dark:bg-gray-800 dark:text-blue-400 flex items-center gap-2">
                                                    <x-heroicon-o-eye class="w-5 h-5" />
                                                    Ver
                                                </a>
                                                @if(!$message->leido)
                                                <form id="read-form-{{ $message->id }}" action="{{ route('contact.read', $message) }}" method="POST" style="display: inline;">
                                                    @csrf
                                                    @method('PATCH')
                                                    <button type="button" onclick="confirmMarkAsRead({{ $message->id }})" class="px-3 py-1 text-sm text-green-600 bg-green-100 rounded-full hover:text-white hover:bg-green-500 dark:bg-gray-800 dark:text-green-400 flex items-center gap-2">
                                                        <x-heroicon-o-check class="w-5 h-5" />
                                                        Marcar como leído
                                                    </button>
                                                </form>
                                                @else
                                                <form id="unread-form-{{ $message->id }}" action="{{ route('contact.unread', $message) }}" method="POST" style="display: inline;">
                                                    @csrf
                                                    @method('PATCH')
                                                    <button type="button" onclick="confirmMarkAsUnread({{ $message->id }})" class="px-3 py-1 text-sm text-yellow-600 bg-yellow-100 rounded-full hover:text-white hover:bg-yellow-500 dark:bg-gray-800 dark:text-yellow-400 flex items-center gap-2">
                                                        <x-heroicon-o-x-circle class="w-5 h-5" />
                                                        Marcar como no leído
                                                    </button>
                                                </form>
                                                @endif
                                                <form id="delete-form-{{ $message->id }}" action="{{ route('contact.destroy', $message) }}" method="POST" style="display: inline;">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="button" onclick="confirmDelete({{ $message->id }})" class="px-3 py-1 text-sm text-red-600 bg-red-100 rounded-full hover:text-white hover:bg-red-500 dark:bg-gray-800 dark:text-red-400 flex items-center gap-2">
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
        function confirmMarkAsRead(messageId) {
            Swal.fire({
                title: "¿Estás seguro de marcar este mensaje como leído?",
                text: "Esta acción marcará el mensaje como leído.",
                icon: "info",
                showCancelButton: true,
                confirmButtonColor: "#007bff",
                cancelButtonColor: "#d33",
                confirmButtonText: "Sí, marcar como leído",
                cancelButtonText: "Cancelar"
            }).then((result) => {
                if (result.isConfirmed) {
                    document.getElementById('read-form-' + messageId).submit();
                }
            });
        }

        function confirmMarkAsUnread(messageId) {
            Swal.fire({
                title: "¿Estás seguro de marcar este mensaje como no leído?",
                text: "Esta acción marcará el mensaje como no leído.",
                icon: "info",
                showCancelButton: true,
                confirmButtonColor: "#007bff",
                cancelButtonColor: "#d33",
                confirmButtonText: "Sí, marcar como no leído",
                cancelButtonText: "Cancelar"
            }).then((result) => {
                if (result.isConfirmed) {
                    document.getElementById('unread-form-' + messageId).submit();
                }
            });
        }

        function confirmDelete(messageId) {
            Swal.fire({
                title: "¿Seguro deseas eliminar este mensaje?",
                text: "Esta acción no podrá revertirse",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#fcba03",
                cancelButtonColor: "#d33",
                confirmButtonText: "Sí, eliminar!",
                cancelButtonText: "Cancelar"
            }).then((result) => {
                if (result.isConfirmed) {
                    document.getElementById('delete-form-' + messageId).submit();
                }
            });
        }
    </script>
</x-app-layout>
