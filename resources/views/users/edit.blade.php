
<x-app-layout>
    <section class="container mx-auto px-4">
        <div class="flex items-center justify-center gap-x-3 my-8">
            <x-heroicon-o-user-group class="w-6 h-6" stroke-width="1" />
            <h1 class="text-2xl font-medium text-gray-800 dark:text-white tracking-wider font-bold">Editar Usuario</h1>
        </div>

        <div class="max-w-4xl mx-auto bg-white p-6 rounded-lg shadow-md">
            <form method="POST" action="{{ route('users.update', $user->id) }}" class="space-y-6" id="editUser">
                @csrf
                @method('PATCH')

                <input type="hidden" name="user_id" value="{{ $user->id }}">

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <!-- Nombre -->
                    <div class="mb-4">
                        <label for="name" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Nombre</label>
                        <input type="text" id="name" name="name" value="{{ old('name', $user->name) }}" class="mt-1 block w-full rounded-lg border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300" autofocus autocomplete="off"/>
                        @error('name')
                            <p class="mt-2 text-sm text-red-600 dark:text-red-400">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Apellido -->
                    <div class="mb-4">
                        <label for="lastname" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Apellido</label>
                        <input type="text" id="lastname" name="lastname" value="{{ old('lastname', $user->lastname) }}" class="mt-1 block w-full rounded-lg border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300" autocomplete="off"/>
                        @error('lastname')
                            <p class="mt-2 text-sm text-red-600 dark:text-red-400">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Email -->
                    <div class="mb-4">
                        <label for="email" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Email</label>
                        <input type="email" id="email" name="email" value="{{ old('email', $user->email) }}" class="mt-1 block w-full rounded-lg border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300" disabled />
                        <input type="hidden" name="email" value="{{ $user->email }}">
                    </div>

                    <!-- Password -->
                    <div class="mb-4">
                        <label for="password" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Password</label>
                        <input type="password" id="password" name="password" class="mt-1 block w-full rounded-lg border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300" autocomplete="off"/>
                        @error('password')
                            <p class="mt-2 text-sm text-red-600 dark:text-red-400">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Rol -->
                    <div class="mb-4">
                        <label for="roles" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Rol</label>
                        <select id="roles" name="roles" class="mt-1 block w-full rounded-lg border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300">
                            <option value="" disabled selected>Seleccionar rol</option>
                            @foreach($roles as $role)
                                <option value="{{ $role->name }}" {{ old('roles') == $role->name ? 'selected' : '' }}>
                                    {{ $role->name }}
                                </option>
                            @endforeach
                        </select>
                        @error('roles')
                            <p class="mt-2 text-sm text-red-600 dark:text-red-400">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                

                <div class="flex justify-end space-x-4 mt-6">
                    <button type="submit" class="px-8 py-2.5 text-gray-950 bg-amber-400 rounded-md hover:bg-gray-600 focus:outline-none focus:bg-gray-600 transition-colors duration-300">Actualizar</button>
                    
                    <button type="button" class="px-8 py-2.5 text-gray-950 bg-gray-300 rounded-md hover:bg-gray-600 focus:outline-none focus:bg-gray-600 transition-colors duration-300" onclick="window.location='{{ route('users.index') }}'">Cancelar</button>
                </div>
            </form>
        </div>
    </section>


    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        document.getElementById('editUser').addEventListener('submit', function(event) {
            event.preventDefault(); 
    
            var form = event.target;
            var formData = new FormData(form);
    
            fetch(form.action, {
                method: 'POST',
                body: formData,
                headers: {
                    'X-Requested-With': 'XMLHttpRequest',
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                }
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    Swal.fire({
                        title: 'Éxito!',
                        text: data.success,
                        icon: 'success',
                        confirmButtonText: 'Aceptar',
                        showConfirmButton: false,
                        timer: 1500
                    }).then(() => {
                        window.location.href = "{{ route('users.index') }}"; 
                    });
                } else if (data.error) {
                    Swal.fire({
                        title: 'Error!',
                        text: data.error,
                        icon: 'error',
                        confirmButtonText: 'Aceptar',
                        showConfirmButton: false,
                        timer: 1500
                    });
                }
            })
            .catch(error => {
                Swal.fire({
                    title: 'Error!',
                    text: 'Ocurrió un error inesperado',
                    icon: 'error',
                    confirmButtonText: 'Aceptar',
                    showConfirmButton: false,
                    timer: 1500
                   
                });
            });
        });
    </script>
    
    <style>
        .btn {
            padding: 10px 20px;
            border-radius: 5px;
            color: white;
            font-size: 16px;
            border: none;
            cursor: pointer;
        }
    
        .btn-success {
            background-color: #28a745; /* Verde éxito */
        }
    
        .btn-danger {
            background-color: #dc3545; /* Rojo error */
        }
    
        .btn:hover {
            opacity: 0.8;
        }
    </style>
    
 
</x-app-layout>

