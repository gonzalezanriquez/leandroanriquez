{{-- <form action="{{ route('assignRole', $user->id) }}" method="POST">
    @csrf
    <select name="role">
        <option value="admin">Admin</option>
        <option value="docente">Docente</option>
        <option value="estudiante">Estudiante</option>
        <option value="familia">Familia</option>
    </select>
    
    <!-- Campos adicionales para el estudiante -->
    <div id="estudiante-fields" style="display: none;">
        <input type="text" name="genero" placeholder="Género" required>
        <input type="date" name="fecha_nacimiento" placeholder="Fecha de Nacimiento" required>
        <input type="text" name="lugar_nacimiento" placeholder="Lugar de Nacimiento" required>
        <input type="text" name="nacionalidad" placeholder="Nacionalidad" required>
        <input type="text" name="domicilio" placeholder="Domicilio" required>
        <input type="text" name="depto_torre_piso" placeholder="Depto/Torre/Piso">
        <input type="text" name="localidad" placeholder="Localidad" required>
        <input type="text" name="codigo_postal" placeholder="Código Postal">
        <input type="text" name="dni" placeholder="DNI" required>
        <input type="text" name="cuil" placeholder="CUIL">
    </div>
    
    <button type="submit">Asignar Rol</button>
</form> --}}
{{-- <script>
    // Mostrar campos adicionales cuando se selecciona 'estudiante'
    document.querySelector('select[name="role"]').addEventListener('change', function() {
        if (this.value === 'estudiante') {
            document.getElementById('estudiante-fields').style.display = 'block';
        } else {
            document.getElementById('estudiante-fields').style.display = 'none';
        }
    });
</script> --}}
<h1>sddff</h1>