<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Curso;
use Carbon\Carbon;
use PDF; 

class ConstanciaController extends Controller
{
    public function showForm()
    {
        $students = User::role('estudiante')->get();
        $curso = Curso::all();
        return view('constancia.form', compact('students','curso'));
    }

    public function generateConstancia(Request $request)
    {
        $validatedData = $request->validate([
            'student_id' => 'required|exists:users,id',
            'nombre_colegio' => 'required|string',
            'colegio_destino' => 'required|string',
            'fecha' => 'required|date',
            'curso' => 'required|string',
        ]);

        $student = User::find($validatedData['student_id']);
        $fecha = Carbon::parse($validatedData['fecha'])->format('d/m/Y');
        $nombre = $student->nombre;
        $apellido = $student->apellido;
        $nombre_colegio = $validatedData['nombre_colegio'];
        $colegio_destino = $validatedData['colegio_destino'];
        $curso = $validatedData['curso'];

        $pdf = PDF::loadView('constancia.constancia', [
            'fecha' => $fecha,
            'nombre' => $nombre,
            'apellido' => $apellido,
            'nombre_colegio' => $nombre_colegio,
            'colegio_destino' => $colegio_destino,
            'curso' => $curso
        ]);

        $filename = "CONSTANCIA DE ALUMNO REGULAR - {$apellido}, {$nombre} - {$fecha}.pdf";

        return $pdf->download($filename);
    }
}
