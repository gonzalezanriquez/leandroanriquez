<x-app-layout>
    <div> 
        @if (session('success'))
            <x-alert type="success" :message="session('success')" />
        @endif
  
        @if (session('error'))
            <x-alert type="error" :message="session('error')" />
        @endif
    </div>
    
    <form method="POST" action="{{ route('user.update', $user->id) }}" class="mt-6 space-y-6" id="editUser">
        @csrf
        @method('PATCH')
  
        <section class="max-w-4xl p-6 mx-auto bg-white rounded-md shadow-md dark:bg-gray-800">
            <h2 class="text-lg font-semibold text-gray-700 capitalize dark:text-white">Account settings</h2>
  
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
                    <input type="text" id="lastname" name="lastname" value="{{ old('lastname', $user->lastname) }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" autofocus />
                    @error('lastname')
                        <div class="text-red-500">{{ $message }}</div>
                    @enderror
                </div>
  
                <div>
                    <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
                    <input type="email" id="email" name="email" value="{{ old('email', $user->email) }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required />
                    @error('email')
                        <div class="text-red-500">{{ $message }}</div>
                    @enderror
                </div>
  
                <div>
                    <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Password</label>
                    <input type="password" id="password" name="password" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" />
                    @error('password')
                        <div class="text-red-500">{{ $message }}</div>
                    @enderror
                </div>
  
                <div>
                    <label for="roles" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Roles</label>
                    <select id="roles" name="roles[]" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" multiple>
                        <option value="">Seleccionar</option>
                        @foreach($roles as $role)
                            <option value="{{ $role->name }}">{{ $role->name }}</option>
                        @endforeach
                    </select>
                    @error('roles')
                        <div class="text-red-500">{{ $message }}</div>
                    @enderror
                </div>
            </div>
  
            <div class="flex justify-end mt-6">
                <button type="submit" class="px-8 py-2.5 leading-5 text-gray-950 transition-colors duration-300 transform bg-amber-400 rounded-md hover:bg-gray-600 focus:outline-none focus:bg-gray-600">Actualizar</button>
            </div>
        </section>
    </form>



    <div class="container mx-auto mt-8">
        <div class="max-w-md mx-auto bg-white p-8 rounded-lg shadow-md">
            <h2 class="text-2xl font-bold mb-4">Crear Usuario</h2>
            <form action="" method="POST">
                @csrf
                <!-- Otros campos del formulario -->
                
                <!-- Desplegable de Roles -->
                <div class="mb-4">
                    <label for="role" class="block text-gray-700 font-bold mb-2">Rol:</label>
                    <select name="role" id="role" class="w-full p-2 border border-gray-300 rounded-lg">
                        <option value="">Seleccionar</option>
                        @foreach($roles as $role)
                            <option value="{{ $role->name }}">{{ $role->name }}</option>
                        @endforeach
                    </select>
                </div>
                
                <div class="mb-4">
                    <button type="submit" class="w-full bg-blue-500 text-white py-2 rounded-lg hover:bg-blue-700">Guardar</button>
                </div>
            </form>
        </div>
    </div>
    
    

  </x-app-layout>
  