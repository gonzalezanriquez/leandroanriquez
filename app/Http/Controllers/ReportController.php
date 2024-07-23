<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade as PDF;

class ReportController extends Controller
{
    public function generateUserReport()
    {
        // Datos del usuario (normalmente obtenidos de la base de datos)
        $userData = [
            'name' => 'John Doe',
            'email' => 'john.doe@example.com',
            'joined_date' => '2023-01-01'
        ];

        // Generar el PDF
        $pdf = PDF::loadView('reports.user_report', $userData);

        // Descargar el PDF
        return $pdf->download('user_report.pdf');
    }
}
