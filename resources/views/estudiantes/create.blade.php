<x-app-layout>

    <section class="container mx-auto px-4">
      <div class="flex items-center justify-center gap-x-3 my-8">
        <x-heroicon-o-user-group class="w-6 h-6" stroke-width="1" />
        <h1 class="text-2xl font-medium text-gray-800 dark:text-white tracking-wider font-bold">Crear Estudiantes</h1>
      </div>
  
      <div class="max-w-4xl mx-auto bg-white p-6 rounded-lg shadow-md">
        <form action="{{ route('estudiantes.store') }}" method="POST">
          @csrf
  
          <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <!-- Ciclolectivo -->
            <div class="mb-4">
              <label for="ciclolectivo" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Ciclo Lectivo</label>
              <select id="ciclolectivo" name="ciclolectivo_id" class="mt-1 block w-full rounded-lg border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300">
                <option value="">Seleccionar Ciclo Lectivo</option>
                @foreach($ciclolectivos as $ciclolectivo)
                  <option value="{{ $ciclolectivo->id }}">{{ $ciclolectivo->anio }}</option>
                @endforeach
              </select>
              @error('ciclolectivo_id')
                <p class="mt-2 text-sm text-red-600 dark:text-red-400">{{ $message }}</p>
              @enderror
            </div>
  
            <!-- Curso -->
            <div class="mb-4">
              <label for="curso" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Curso</label>
              <select id="curso" name="curso_id" class="mt-1 block w-full rounded-lg border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300">
                <option value="">Seleccionar Curso</option>
                @foreach($cursos as $curso)
                  <option value="{{ $curso->id }}">{{ $curso->curso }} {{ $curso->nivel }} </option>
                @endforeach
              </select>
              @error('curso_id')
                <p class="mt-2 text-sm text-red-600 dark:text-red-400">{{ $message }}</p>
              @enderror
            </div>
  
            <!-- Apellidos -->
            <div class="mb-4">
              <label for="apellidos" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Apellidos</label>
              <input id="apellidos" name="apellidos" type="text" value="{{ old('apellidos') }}" class="mt-1 block w-full rounded-lg border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300">
              @error('apellidos')
                <p class="mt-2 text-sm text-red-600 dark:text-red-400">{{ $message }}</p>
              @enderror
            </div>
  
            <!-- Nombres -->
            <div class="mb-4">
              <label for="nombres" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Nombres</label>
              <input id="nombres" name="nombres" type="text" value="{{ old('nombres') }}" class="mt-1 block w-full rounded-lg border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300">
              @error('nombres')
                <p class="mt-2 text-sm text-red-600 dark:text-red-400">{{ $message }}</p>
              @enderror
            </div>
  
            <!-- Genero -->
            <div class="mb-4">
              <label for="genero" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Género</label>
              <select id="genero" name="genero" class="mt-1 block w-full rounded-lg border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300">
                <option value="">Seleccionar Género</option>
                <option value="Masculino">Masculino</option>
                <option value="Femenino">Femenino</option>
                <option value="Otro">Otro</option>
              </select>
              @error('genero')
                <p class="mt-2 text-sm text-red-600 dark:text-red-400">{{ $message }}</p>
              @enderror
            </div>
  
            <!-- DNI -->
            <div class="mb-4">
              <label for="dni" class="block text-sm font-medium text-gray-700 dark:text-gray-300">DNI</label>
              <input id="dni" name="dni" type="text" value="{{ old('dni') }}" class="mt-1 block w-full rounded-lg border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300">
              @error('dni')
                <p class="mt-2 text-sm text-red-600 dark:text-red-400">{{ $message }}</p>
              @enderror
            </div>
  
            <!-- CUIL -->
            <div class="mb-4">
              <label for="cuil" class="block text-sm font-medium text-gray-700 dark:text-gray-300">CUIL</label>
              <input id="cuil" name="cuil" type="text" value="{{ old('cuil') }}" class="mt-1 block w-full rounded-lg border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300">
              @error('cuil')
                <p class="mt-2 text-sm text-red-600 dark:text-red-400">{{ $message }}</p>
              @enderror
            </div>
  
            <!-- Fecha de Nacimiento -->
            <div class="mb-4">
              <label for="fecha_nacimiento" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Fecha de Nacimiento</label>
              <input id="fecha_nacimiento" name="fecha_nacimiento" type="date" value="{{ old('fecha_nacimiento') }}" class="mt-1 block w-full rounded-lg border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300">
              @error('fecha_nacimiento')
                <p class="mt-2 text-sm text-red-600 dark:text-red-400">{{ $message }}</p>
              @enderror
            </div>
  
            <!-- Lugar de Nacimiento -->
            <div class="mb-4">
              <label for="lugar_nacimiento" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Lugar de Nacimiento</label>
              <input id="lugar_nacimiento" name="lugar_nacimiento" type="text" value="{{ old('lugar_nacimiento') }}" class="mt-1 block w-full rounded-lg border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300">
              @error('lugar_nacimiento')
                <p class="mt-2 text-sm text-red-600 dark:text-red-400">{{ $message }}</p>
              @enderror
            </div>
  
            <!-- Nacionalidad -->
            <div class="mb-4">
              <label for="nacionalidad" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Nacionalidad</label>
              <input id="nacionalidad" name="nacionalidad" type="text" value="{{ old('nacionalidad') }}" class="mt-1 block w-full rounded-lg border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300">
              @error('nacionalidad')
                <p class="mt-2 text-sm text-red-600 dark:text-red-400">{{ $message }}</p>
              @enderror
            </div>
  
            <!-- Dirección -->
            <div class="mb-4">
              <label for="direccion" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Dirección</label>
              <input id="direccion" name="direccion" type="text" value="{{ old('direccion') }}" class="mt-1 block w-full rounded-lg border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300">
              @error('direccion')
                <p class="mt-2 text-sm text-red-600 dark:text-red-400">{{ $message }}</p>
              @enderror
            </div>
  
            <!-- Teléfono -->
            <div class="mb-4">
              <label for="telefono" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Teléfono</label>
              <input id="telefono" name="telefono" type="text" value="{{ old('telefono') }}" class="mt-1 block w-full rounded-lg border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300">
              @error('telefono')
                <p class="mt-2 text-sm text-red-600 dark:text-red-400">{{ $message }}</p>
              @enderror
            </div>
  
            <!-- Email -->
            <div class="mb-4">
              <label for="email" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Email</label>
              <input id="email" name="email" type="email" value="{{ old('email') }}" class="mt-1 block w-full rounded-lg border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300">
              @error('email')
                <p class="mt-2 text-sm text-red-600 dark:text-red-400">{{ $message }}</p>
              @enderror
            </div>
          </div>
  
          <!-- Submit Button -->
          <div class="flex justify-end mt-6">
            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-lg shadow-sm hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 dark:bg-blue-600 dark:hover:bg-blue-700">
              Crear Estudiante
            </button>
          </div>
        </form>
      </div>
    </section>
  
  </x-app-layout>
  