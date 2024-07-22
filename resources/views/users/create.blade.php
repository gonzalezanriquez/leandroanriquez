<x-app-layout>

    <div class="max-w-2xl mx-auto py-8 px-4">
        <h2 class="text-2xl font-bold mb-6">Crear Usuario</h2>

        <form action="{{ route('users.store') }}" method="POST" id="createUserForm">
            @csrf

            <!-- Nombre -->
            <div class="mb-4">
                <label for="name" class="block text-gray-700 font-semibold mb-2">Nombre</label>
                <input type="text" id="name" name="name" value="{{ old('name') }}" class="w-full border border-gray-300 rounded-md px-4 py-2" required>
                @error('name')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Apellido -->
            <div class="mb-4">
                <label for="lastname" class="block text-gray-700 font-semibold mb-2">Apellido</label>
                <input type="text" id="lastname" name="lastname" value="{{ old('lastname') }}" class="w-full border border-gray-300 rounded-md px-4 py-2" required>
                @error('lastname')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Correo electrónico -->
            <div class="mb-4">
                <label for="email" class="block text-gray-700 font-semibold mb-2">Correo Electrónico</label>
                <input type="email" id="email" name="email" value="{{ old('email') }}" class="w-full border border-gray-300 rounded-md px-4 py-2" required>
                @error('email')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Contraseña -->
            <div class="mb-4">
                <label for="password" class="block text-gray-700 font-semibold mb-2">Contraseña</label>
                <input type="password" id="password" name="password" class="w-full border border-gray-300 rounded-md px-4 py-2" required>
                @error('password')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Confirmar contraseña -->
            <div class="mb-4 relative">
                <label for="password_confirmation" class="block text-gray-700 font-semibold mb-2">Confirmar Contraseña</label>
                <input type="password" id="password_confirmation" name="password_confirmation" class="w-full border border-gray-300 rounded-md px-4 py-2 pr-10" required>
                <i id="togglePasswordConfirmation" class="fa fa-eye absolute inset-y-0 right-0 pr-3 flex items-center cursor-pointer"></i>
            </div>

            <!-- Rol -->
            <div class="mb-4">
                <label for="roles" class="block text-gray-700 font-semibold mb-2">Rol</label>
                <select id="roles" name="roles" class="w-full border border-gray-300 rounded-md px-4 py-2" required>
                    <option value="" disabled selected>Seleccionar</option>
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

            <!-- Botón de enviar -->
            <div class="mt-6">
                <button type="submit" class="bg-blue-500 text-white font-semibold px-4 py-2 rounded-md hover:bg-blue-600">Crear Usuario</button>
            </div>
        </form>
    </div>

 
</x-app-layout>
