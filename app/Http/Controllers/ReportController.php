<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Dompdf\Dompdf;
use Illuminate\Support\Facades\Storage;
use App\Models\Estudiante;

class ReportController extends Controller
{
    public function index()
    {
        // Obtener todos los estudiantes
        $students = Estudiante::all();

        // Pasar los estudiantes a la vista
        return view('report.index', ['students' => $students]);
    }

    public function generateUserReport(Request $request)
    {
        // Validar el estudiante seleccionado
        $request->validate([
            'student_id' => 'required|exists:students,id',
        ]);

        $student = Student::find($request->input('student_id'));

        $dompdf = new Dompdf();

        // Cargar contenido HTML
        $html = view('reports.user_report', [
            'name' => $student->name,
            'email' => $student->email,
            'joined_date' => $student->joined_date,
        ])->render();

        $dompdf->loadHtml($html);

        // (Opcional) Configurar tamaño y orientación del papel
        $dompdf->setPaper('A4', 'landscape');

        // Renderizar el HTML como PDF
        $dompdf->render();

        // Guardar PDF localmente
        $pdfPath = storage_path('app/reports/user_report.pdf');
        file_put_contents($pdfPath, $dompdf->output());

        // Obtener la URL del archivo
        $uploadedFilePath = Storage::url('reports/user_report.pdf');

        return response()->json(['message' => 'El archivo ha sido guardado.', 'path' => $uploadedFilePath]);
    }
}
