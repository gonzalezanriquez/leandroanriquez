<x-dash-layout>
    <div class="container mx-auto p-6">
        <h1 class="text-2xl font-bold mb-6">Generar Constancia de Alumno Regular</h1>
        <form action="{{ route('constancia.generate') }}" method="POST" class="bg-white p-6 rounded-lg shadow-md">
            @csrf
            
            <!-- Campo para el nombre del colegio -->
            <div class="mb-4">
                <label for="nombre_colegio" class="block text-lg font-medium text-gray-700">Nombre del Colegio:</label>
                <input type="text" id="nombre_colegio" name="nombre_colegio" required
                    class="mt-2 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            </div>

            <!-- Campo para el colegio de destino -->
            <div class="mb-4">
                <label for="colegio_destino" class="block text-lg font-medium text-gray-700">Colegio de Destino:</label>
                <input type="text" id="colegio_destino" name="colegio_destino" required
                    class="mt-2 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            </div>
            <!-- Campo para el curso actual-->
          

            <div class="mb-4">
                <label for="curso" class="block text-lg font-medium text-gray-700">Seleccione Curso Actual</label>
                <select id="curso" name="curso" required
                    class="mt-2 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                    <option value="" disabled selected>Seleccionar Curso</option>
                    @foreach($curso as $cursos)
                        <option value="{{ $cursos->curso}} {{ $cursos->nivel }}">{{ $cursos->curso }} {{ $cursos->nivel }} </option>
                    @endforeach
                </select>
            </div>


            <!-- Campo para la fecha -->
            <div class="mb-4">
                <label for="fecha" class="block text-lg font-medium text-gray-700">Fecha:</label>
                <input type="date" id="fecha" name="fecha" required
                    class="mt-2 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            </div>

            <!-- Campo para seleccionar el estudiante -->
            <div class="mb-4">
                <label for="student_id" class="block text-lg font-medium text-gray-700">Seleccione un estudiante:</label>
                <select id="student_id" name="student_id" required
                    class="mt-2 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                    <option value="" disabled selected>Seleccionar Estudiante</option>
                    @foreach($students as $student)
                        <option value="{{ $student->id }}">{{ $student->nombre }} {{ $student->apellido }}</option>
                    @endforeach
                </select>
            </div>

            <button type="submit" class="inline-flex items-center px-4 py-2 border border-transparent rounded-md shadow-sm text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                Generar Constancia
            </button>
        </form>
    </div>
</x-dash-layout>
