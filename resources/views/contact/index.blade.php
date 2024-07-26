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
                                                @if(!$message->read)
                                                <form id="read-form-{{ $message->id }}" action="{{ route('contact.read', $message) }}" method="POST" style="display: inline;">
                                                    @csrf
                                                    @method('PATCH')
                                                    <button type="submit" class="px-3 py-1 text-sm text-green-600 bg-green-100 rounded-full hover:text-white hover:bg-green-500 dark:bg-gray-800 dark:text-green-400 flex items-center gap-2">
                                                        <x-heroicon-o-check class="w-5 h-5" />
                                                        Marcar como leído
                                                    </button>
                                                </form>
                                                @endif
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
</x-app-layout>
