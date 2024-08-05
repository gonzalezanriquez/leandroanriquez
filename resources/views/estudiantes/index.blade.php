<x-app-layout>
    <section class="container px-4 mx-auto">
        <div class="flex items-center justify-between gap-x-3">
            <div class="flex items-center gap-x-3">
                <x-heroicon-o-user-group class="w-6 h-6" stroke-width="1" />
                <h2 class="text-lg font-medium text-gray-800 dark:text-white tracking-wider">Estudiantes</h2>
                <span class="px-3 py-1 text-xs text-blue-600 bg-blue-100 rounded-full dark:bg-gray-800 dark:text-blue-400">{{ $students->count() }} estudiantes</span>
            </div>
            <a href="{{ route('estudiantes.create') }}">
                <button class="inline-flex items-center justify-center gap-1.5 rounded-lg border border-gray-200 bg-white px-3 py-2 text-gray-500 transition hover:text-gray-700 focus:outline-none focus:ring text-sm">
                    <span class="font-medium">Crear nuevo Estudiante</span>
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
                                    <th scope="col" class="py-3.5 px-4 text-sm font-normal text-left text-gray-500 dark:text-gray-400">Nombre</th>
                                    <th scope="col" class="px-4 py-3.5 text-sm font-normal text-left text-gray-500 dark:text-gray-400">Apellido</th>
                                    <th scope="col" class="px-4 py-3.5 text-sm font-normal text-left text-gray-500 dark:text-gray-400">Acción</th>
                                </tr>
                            </thead>

                            <tbody class="bg-white divide-y divide-gray-200 dark:divide-gray-700 dark:bg-gray-900">
                                @foreach ($students as $student)
                                    <tr class="flex flex-col mb-4 sm:table-row">
                                        <td class="px-4 py-4 text-sm font-medium text-gray-700 whitespace-nowrap">
                                            <div class="inline-flex items-center gap-x-3">
                                                <div class="flex items-center gap-x-2">
                                                    @if($student->avatar)
                                                        <img class="object-cover w-10 h-10 rounded-full" src="{{ $student->avatar }}" alt="Avatar de {{ $student->nombre }}">
                                                    @else
                                                        <img class="object-cover w-10 h-10 rounded-full" src="{{ asset('img/genericUser.svg') }}" alt="Avatar genérico">
                                                    @endif
                                                    <div>
                                                        <h2 class="font-medium text-black dark:text-white font-bold uppercase">{{ $student->nombre }}, {{ $student->apellido }}</h2>
                                                        <p class="text-sm font-normal text-gray-500 dark:text-gray-200">{{ $student->email }}</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>

                                        <td class="px-4 py-4 text-sm whitespace-nowrap">
                                            @forelse($student->roles as $role)
                                                <h2 class="font-medium text-black dark:text-white font-bold uppercase">{{ $role->name }}</h2>
                                            @empty
                                                <h2 class="font-medium text-gray-500 dark:text-gray-400 font-bold uppercase">Sin rol definido</h2>
                                            @endforelse
                                        </td>
                                        <td class="px-4 py-4 text-sm font-medium text-gray-700 whitespace-nowrap">
                                            <div class="flex items-center gap-x-3">
                                                <a href="{{ route('users.edit', $student->id) }}" class="px-3 py-1 text-sm text-green-600 bg-green-100 rounded-full hover:text-white hover:bg-green-500 dark:bg-gray-800 dark:text-green-400 flex items-center gap-2">
                                                    <x-heroicon-o-pencil class="w-5 h-5" />
                                                </a>

                                                <form id="delete-form-{{ $student->id }}" action="{{ route('users.destroy', $student->id) }}" method="POST" style="display: inline;">
                                                    @csrf
                                                    @method('DELETE')

                                                    <button type="button" onclick="confirmDelete({{ $student->id }})" class="px-3 py-1 text-sm text-red-600 bg-red-100 rounded-full hover:text-white hover:bg-red-500 dark:bg-gray-800 dark:text-red-400 flex items-center gap-2">
                                                        <x-heroicon-o-trash class="w-5 h-5" />
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
        function confirmDelete(dataId) {
            Swal.fire({
                title: "¿Estás seguro de que deseas eliminar a este estudiante?",
                text: "Esta acción no podrá revertirse",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#fcba03",
                cancelButtonColor: "#d33",
                confirmButtonText: "Sí, eliminar!",
                cancelButtonText: 'Cancelar'
            }).then((result) => {
                if (result.isConfirmed) {
                    document.getElementById('delete-form-' + dataId).submit();
                }
            });
        }
    </script>
</x-app-layout>
