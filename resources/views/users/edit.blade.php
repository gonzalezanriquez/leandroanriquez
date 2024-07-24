{{-- <x-app-layout>
    <div>
        @if (session('success'))
            <x-alert type="success" :message="session('success')" />
        @endif

        @if (session('error'))
            <x-alert type="error" :message="session('error')" />
        @endif
    </div>
    <x-sweet-alert/>

    <form method="POST" action="{{ route('users.update', $user->id) }}" class="mt-6 space-y-6" id="editUser">
        @csrf
        @method('PATCH')

        <section class="max-w-4xl p-6 mx-auto bg-white rounded-md shadow-md dark:bg-gray-800">
            <h2 class="text-lg font-semibold text-gray-700 capitalize dark:text-white">Datos de Usuario</h2>

            <div class="grid grid-cols-1 gap-6 mt-4 sm:grid-cols-2">
                <div>
                    <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nombre</label>
                    <input type="text" id="name" name="name" value="{{ old('name', $user->name) }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" autofocus />
                    @error('name')
                        <div class="text-red-500">{{ $message }}</div>
                    @enderror
                </div>

                <div>
                    <label for="lastname" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Apellido</label>
                    <input type="text" id="lastname" name="lastname" value="{{ old('lastname', $user->lastname) }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" />
                    @error('lastname')
                        <div class="text-red-500">{{ $message }}</div>
                    @enderror
                </div>

                <div>
                    <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
                    <input type="email" id="email" name="email" value="{{ old('email', $user->email) }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" disabled />
                    <input type="hidden" name="email" value="{{ $user->email }}">
                </div>

                <div>
                    <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Password</label>
                    <input type="password" id="password" name="password" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" />
                    @error('password')
                        <div class="text-red-500">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="roles" class="block text-gray-700 font-semibold mb-2">Rol</label>
                    <select id="roles" name="roles" class="w-full border border-gray-300 rounded-md px-4 py-2">
                        @foreach($roles as $role)
                            <option value="{{ $role->name }}" {{ old('roles') == $role->name ? 'selected' : '' }}>
                                {{ $role->name }}
                            </option>
                        @endforeach
                    </select>
                    @error('roles')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>
                
                <div class="flex justify-end mt-6 space-x-4">
                    <button type="submit" class="px-8 py-2.5 leading-5 text-gray-950 transition-colors duration-300 transform bg-amber-400 rounded-md hover:bg-gray-600 focus:outline-none focus:bg-gray-600">Actualizar</button>
                    
                    <button type="button" class="px-8 py-2.5 leading-5 text-gray-950 transition-colors duration-300 transform bg-gray-300 rounded-md hover:bg-gray-600 focus:outline-none focus:bg-gray-600" onclick="window.location='{{ route('users.index') }}'">Cancelar</button>
                </div>
            </div>
        </section>
    </form>
</x-app-layout> --}}

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

                <div>
                    @if (session('success'))
                        <x-alert type="success" :message="session('success')" />
                    @endif

                    @if (session('error'))
                        <x-alert type="error" :message="session('error')" />
                    @endif
                </div>
                
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <!-- Nombre -->
                    <div class="mb-4">
                        <label for="name" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Nombre</label>
                        <input type="text" id="name" name="name" value="{{ old('name', $user->name) }}" class="mt-1 block w-full rounded-lg border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300" autofocus />
                        @error('name')
                            <p class="mt-2 text-sm text-red-600 dark:text-red-400">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Apellido -->
                    <div class="mb-4">
                        <label for="lastname" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Apellido</label>
                        <input type="text" id="lastname" name="lastname" value="{{ old('lastname', $user->lastname) }}" class="mt-1 block w-full rounded-lg border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300" />
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
                        <input type="password" id="password" name="password" class="mt-1 block w-full rounded-lg border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300" />
                        @error('password')
                            <p class="mt-2 text-sm text-red-600 dark:text-red-400">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Rol -->
                    <div class="mb-4">
                        <label for="roles" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Rol</label>
                        <select id="roles" name="roles" class="mt-1 block w-full rounded-lg border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300">
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
</x-app-layout>

