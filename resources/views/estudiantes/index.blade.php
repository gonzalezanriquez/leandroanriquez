<x-app-layout>
    <section class="container px-4 mx-auto">
        <div class="flex items-center justify-between gap-x-3">
            <div class="flex items-center gap-x-3">
                <x-heroicon-o-user-group class="w-6 h-6" stroke-width="1" />                <h2 class="text-lg font-medium text-gray-800 dark:text-white tracking-wider">Estudiantes</h2>
                <span class="px-3 py-1 text-xs text-blue-600 bg-blue-100 rounded-full dark:bg-gray-800 dark:text-blue-400">{{ $datas->count() }} estudiantes</span>
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

                            @foreach ($datas as $data)
                                <tbody class="bg-white divide-y divide-gray-200 dark:divide-gray-700 dark:bg-gray-900">
                                    <tr class="flex flex-col mb-4 sm:table-row">
                                        <td class="px-4 py-4 text-sm font-medium text-gray-700 whitespace-nowrap">
                                            <div class="inline-flex items-center gap-x-3">
                                                <div class="flex items-center gap-x-2">
                                                    @if($data->avatar)
                                                        <img class="object-cover w-10 h-10 rounded-full" src="{{ $data->avatar }}" alt="">
                                                    @else
                                                        <img class="object-cover w-10 h-10 rounded-full" src="{{ asset('img/genericUser.svg') }}" alt="">
                                                    @endif
                                                    <div>
                                                        <h2 class="font-medium text-black dark:text-white font-bold uppercase">{{ $data->lastname }}, {{ $data->name }} </h2>
                                                        <p class="text-sm font-normal text-gray-500 dark:text-gray-200">{{ $data->email }}</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>

                                        <td class="px-4 py-4 text-sm text-gray-700 whitespace-nowrap">
                                            @if($data->roles->isNotEmpty())
                                                @foreach($data->roles as $role)
                                                    <span class="inline-flex items-center px-2 py-1 text-xs font-medium leading-none text-green-800 bg-green-100 rounded-full dark:bg-ambier-800 dark:text-green-400 md:inline-block">
                                                        {{ $role->name }}
                                                    </span>
                                                @endforeach
                                            @else
                                                <span class="inline-flex items-center px-2 py-1 text-xs font-medium leading-none text-black-900 bg-amber-400 rounded-full dark:bg-amber-500 dark:text-amber-900 sm:hidden">
                                                    Sin definir
                                                </span>
                                            @endif
                                        </td>
                                        
                                        <td class="px-4 py-4 text-sm font-medium text-gray-700 whitespace-nowrap">
                                            <div class="flex items-center gap-x-3">
                                                <a href="{{ route('users.edit', $data->id) }}" class="px-3 py-1 text-sm text-green-600 bg-green-100 rounded-full hover:text-white hover:bg-green-500 dark:bg-gray-800 dark:text-green-400 flex items-center gap-2">
                                                    <x-heroicon-o-pencil class="w-5 h-5" />
                                                 </a>

                                                <form id="delete-form-{{ $data->id }}" action="{{ route('users.destroy', $data->id) }}" method="POST" style="display: inline;">
                                                    @csrf
                                                    @method('DELETE')

                                                    <button type="button" onclick="confirmDelete({{ $data->id }})" class="px-3 py-1 text-sm text-red-600 bg-red-100 rounded-full hover:text-white hover:bg-red-500 dark:bg-gray-800 dark:text-red-400 flex items-center gap-2">
                                                        <x-heroicon-o-trash class="w-5 h-5" />
                                                         </button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            @endforeach
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
                title: "Seguro deseas eliminar a este Estudiante?",
                text: "Esta acción no podra revertirse",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#fcba03",
                cancelButtonColor: "#d33",
                confirmButtonText: "Si, elimilar!",
                cancelButtonText: 'Cancelar'
            }).then((result) => {
                if (result.isConfirmed) {
                    document.getElementById('delete-form-' + userId).submit();
                }
            });
        }
    </script>
</x-app-layout>
