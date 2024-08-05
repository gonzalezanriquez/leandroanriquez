<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Dompdf\Dompdf;
use Illuminate\Support\Facades\Storage;
use App\Models\User;
use Spatie\Permission\Models\Role; // Asegúrate de tener esta importación si usas Spatie para roles

class ReportController extends Controller
{
    public function index()
    {
        // Obtener todos los usuarios con el rol 'estudiante'
        $role = Role::where('name', 'estudiante')->first();
        $users = User::role($role->name)->get(); // Filtra usuarios por rol

        // Pasar los usuarios a la vista
        return view('report.index', ['users' => $users]);
    }

    public function generateUserReport(Request $request)
    {
        // Validar el usuario seleccionado
        $request->validate([
            'user_id' => 'required|exists:users,id',
        ]);

        $user = User::find($request->input('user_id'));

        $dompdf = new Dompdf();

        // Cargar contenido HTML
        $html = view('reports.user_report', [
            'name' => $user->name,
            'email' => $user->email,
            'joined_date' => $user->created_at->format('d/m/Y'), // Cambia según cómo deseas mostrar la fecha
        ])->render();

        $dompdf->loadHtml($html);

        // (Opcional) Configurar tamaño y orientación del papel
        $dompdf->setPaper('A4', 'portrait'); // A4 vertical

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
