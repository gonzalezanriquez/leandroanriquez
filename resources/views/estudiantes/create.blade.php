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
                      <select id="ciclolectivo" name="ciclolectivo_id" class="mt-1 block w-full rounded-lg border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300" >
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
                  {{-- <div class="mb-4">
                      <label for="curso" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Curso</label>
                      <select id="curso" name="curso_id" class="mt-1 block w-full rounded-lg border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300" >
                          <option value="">Seleccionar Curso</option>
                          @foreach($cursos as $curso)
                              <option value="{{ $curso->id }}">{{ $curso->nombre }}</option>
                          @endforeach
                      </select>
                      @error('curso_id')
                          <p class="mt-2 text-sm text-red-600 dark:text-red-400">{{ $message }}</p>
                      @enderror
                  </div> --}}

                  <!-- Apellidos -->
                  <div class="mb-4">
                      <label for="apellidos" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Apellidos</label>
                      <input id="apellidos" name="apellidos" type="text" value="{{ old('apellidos') }}" class="mt-1 block w-full rounded-lg border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300" >
                      @error('apellidos')
                          <p class="mt-2 text-sm text-red-600 dark:text-red-400">{{ $message }}</p>
                      @enderror
                  </div>

                  <!-- Nombres -->
                  <div class="mb-4">
                      <label for="nombres" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Nombres</label>
                      <input id="nombres" name="nombres" type="text" value="{{ old('nombres') }}" class="mt-1 block w-full rounded-lg border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300" >
                      @error('nombres')
                          <p class="mt-2 text-sm text-red-600 dark:text-red-400">{{ $message }}</p>
                      @enderror
                  </div>

                  <!-- Genero -->
                  <div class="mb-4">
                      <label for="genero" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Género</label>
                      <select id="genero" name="genero" class="mt-1 block w-full rounded-lg border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300" >
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
                      <input id="dni" name="dni" type="text" value="{{ old('dni') }}" class="mt-1 block w-full rounded-lg border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300" >
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
                      <input id="fecha_nacimiento" name="fecha_nacimiento" type="date" value="{{ old('fecha_nacimiento') }}" class="mt-1 block w-full rounded-lg border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300" >
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

                  <!-- Domicilio -->
                  <div class="mb-4">
                      <label for="domicilio" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Domicilio</label>
                      <input id="domicilio" name="domicilio" type="text" value="{{ old('domicilio') }}" class="mt-1 block w-full rounded-lg border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300" >
                      @error('domicilio')
                          <p class="mt-2 text-sm text-red-600 dark:text-red-400">{{ $message }}</p>
                      @enderror
                  </div>

                  <!-- Piso/Torre/Depto -->
                  <div class="mb-4">
                      <label for="piso_torre_depto" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Piso/Torre/Depto</label>
                      <input id="piso_torre_depto" name="piso_torre_depto" type="text" value="{{ old('piso_torre_depto') }}" class="mt-1 block w-full rounded-lg border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300">
                      @error('piso_torre_depto')
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

                  <!-- Ciudad -->
                  <div class="mb-4">
                      <label for="ciudad" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Ciudad</label>
                      <input id="ciudad" name="ciudad" type="text" value="{{ old('ciudad') }}" class="mt-1 block w-full rounded-lg border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300" >
                      @error('ciudad')
                          <p class="mt-2 text-sm text-red-600 dark:text-red-400">{{ $message }}</p>
                      @enderror
                  </div>

                  <!-- Código Postal -->
                  <div class="mb-4">
                      <label for="codigo_postal" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Código Postal</label>
                      <input id="codigo_postal" name="codigo_postal" type="text" value="{{ old('codigo_postal') }}" class="mt-1 block w-full rounded-lg border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300">
                      @error('codigo_postal')
                          <p class="mt-2 text-sm text-red-600 dark:text-red-400">{{ $message }}</p>
                      @enderror
                  </div>

                  <!-- Emergencia Contacto -->
                  <div class="mb-4">
                      <label for="emergencia_contacto" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Contacto en Emergencia</label>
                      <input id="emergencia_contacto" name="emergencia_contacto" type="text" value="{{ old('emergencia_contacto') }}" class="mt-1 block w-full rounded-lg border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300">
                      @error('emergencia_contacto')
                          <p class="mt-2 text-sm text-red-600 dark:text-red-400">{{ $message }}</p>
                      @enderror
                  </div>

                  <!-- Parentesco Emergencia -->
                  <div class="mb-4">
                      <label for="parentesco_emergencia" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Parentesco en Emergencia</label>
                      <input id="parentesco_emergencia" name="parentesco_emergencia" type="text" value="{{ old('parentesco_emergencia') }}" class="mt-1 block w-full rounded-lg border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300">
                      @error('parentesco_emergencia')
                          <p class="mt-2 text-sm text-red-600 dark:text-red-400">{{ $message }}</p>
                      @enderror
                  </div>

                  <!-- Observaciones -->
                  <div class="mb-4 col-span-2">
                      <label for="observaciones" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Observaciones</label>
                      <textarea id="observaciones" name="observaciones" rows="4" class="mt-1 block w-full rounded-lg border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300">{{ old('observaciones') }}</textarea>
                      @error('observaciones')
                          <p class="mt-2 text-sm text-red-600 dark:text-red-400">{{ $message }}</p>
                      @enderror
                  </div>
              </div>

              <!-- Botón de Enviar -->
              <div class="mt-6 text-right">
                  <button type="submit" class="inline-flex items-center px-4 py-2 bg-blue-500 border border-transparent rounded-lg shadow-sm text-base font-medium text-white hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                      Crear Estudiante
                  </button>
              </div>
          </form>
      </div>
  </section>

</x-app-layout>
