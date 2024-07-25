<x-app-layout>
<div class="container mx-auto px-4">
    <h2 class="text-2xl font-bold mb-6">Crear Usuario</h2>
    
    <div class="bg-white p-6 rounded-lg shadow-md">
        <form action="{{ route('users.store') }}" method="POST">
            @csrf

            <div class="grid grid-cols-1 gap-6 sm:grid-cols-2">
                <!-- Nombre -->
                <div>
                    <label for="nombre" class="block text-sm font-medium text-gray-700">Nombre</label>
                    <input type="text" id="nombre" name="nombre" value="{{ old('nombre') }}" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-500 focus:ring-opacity-50 sm:text-sm @error('nombre') border-red-500 @enderror" />
                    @error('nombre')
                        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Apellido -->
                <div>
                    <label for="apellido" class="block text-sm font-medium text-gray-700">Apellido</label>
                    <input type="text" id="apellido" name="apellido" value="{{ old('apellido') }}" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-500 focus:ring-opacity-50 sm:text-sm @error('apellido') border-red-500 @enderror" />
                    @error('apellido')
                        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Correo Electrónico -->
                <div>
                    <label for="email" class="block text-sm font-medium text-gray-700">Correo Electrónico</label>
                    <input type="email" id="email" name="email" value="{{ old('email') }}" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-500 focus:ring-opacity-50 sm:text-sm @error('email') border-red-500 @enderror" />
                    @error('email')
                        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Contraseña -->
                <div>
                    <label for="password" class="block text-sm font-medium text-gray-700">Contraseña</label>
                    <input type="password" id="password" name="password" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-500 focus:ring-opacity-50 sm:text-sm @error('password') border-red-500 @enderror" />
                    @error('password')
                        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Confirmación de Contraseña -->
                <div>
                    <label for="password_confirmation" class="block text-sm font-medium text-gray-700">Confirmar Contraseña</label>
                    <input type="password" id="password_confirmation" name="password_confirmation" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-500 focus:ring-opacity-50 sm:text-sm @error('password_confirmation') border-red-500 @enderror" />
                    @error('password_confirmation')
                        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Rol -->
                <div>
                    <select name="role">
                        @foreach ($roles as $role)
                            <option value="{{ $role->name }}">{{ $role->name }}</option>
                        @endforeach
                    </select>
                    
                </div>

                <!-- Curso -->
                <div>
                    <label for="curso_id" class="block text-sm font-medium text-gray-700">Curso</label>
                    <select id="curso_id" name="curso_id" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-500 focus:ring-opacity-50 sm:text-sm @error('curso_id') border-red-500 @enderror">
                        <option value="">Seleccionar Curso</option>
                        @foreach($cursos as $curso)
                            <option value="{{ $curso->id }}" {{ old('curso_id') == $curso->id ? 'selected' : '' }}>{{ $curso->curso }} {{ $curso->nivel }}</option>
                        @endforeach
                    </select>
                    @error('curso_id')
                        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

              <!-- Ciclo Lectivo -->

                <div>
                    
                    <label for="ciclolectivo_id" class="block text-sm font-medium text-gray-700">Ciclo Lectivo</label>
                    <select id="ciclolectivo_id" name="ciclolectivo_id" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-500 focus:ring-opacity-50 sm:text-sm @error('ciclolectivo_id') border-red-500 @enderror">
                        <option value="">Seleccionar Ciclo Lectivo</option>
                        @foreach($ciclolectivos as $ciclo)
                            <option value="{{ $ciclo->id }}" {{ old('ciclolectivo_id') == $ciclo->id ? 'selected' : '' }}>{{ $ciclo->anio }}</option>
                        @endforeach
                    </select>
                    @error('ciclolectivo_id')
                        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>



                <!-- Familiar -->
                <div>
                    <label for="familiar_id" class="block text-sm font-medium text-gray-700">Familiar</label>
                    <select id="familiar_id" name="familiar_id" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-500 focus:ring-opacity-50 sm:text-sm @error('familiar_id') border-red-500 @enderror">
                        <option value="">Seleccionar Familiar</option>
                        @foreach($familiares as $familiar)
                            <option value="{{ $familiar->id }}" {{ old('familiar_id') == $familiar->id ? 'selected' : '' }}>{{ $familiar->name }}</option>
                        @endforeach
                    </select>
                    @error('familiar_id')
                        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>
            </div>

            <div class="mt-6 flex justify-end">
                <button type="submit" class="inline-flex items-center px-4 py-2 border border-transparent text-base font-medium rounded-md shadow-sm text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">Crear Usuario</button>
            </div>
        </form>
    </div>
</div>
</x-app-layout>