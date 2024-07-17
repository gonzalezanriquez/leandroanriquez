<?php

namespace App\Http\Controllers;

use Barryvdh\DomPDF\Facade as PDF;
use App\Models\User; // Asegúrate de importar el modelo User

class PDFController extends Controller
{
    public function downloadPDF($id)
    {
        $user = User::find($id);

        if (!$user) {
            abort(404);
        }

        $pdf = PDF::loadView('user_pdf', compact('user'));
        return $pdf->download('user_info.pdf');
    }
}
