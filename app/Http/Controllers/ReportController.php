<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Dompdf\Dompdf;
use Dompdf\Options;
use Illuminate\Support\Facades\Storage;



class ReportController extends Controller
{
    public function generateUserReport()
    {
        $dompdf = new Dompdf();

        // Load HTML content
        $html = view('reports.user_report', [
            'name' => 'John Doe',
            'email' => 'john.doe@example.com',
            'joined_date' => '2023-01-01',
        ])->render();

        $dompdf->loadHtml($html);

        // (Optional) Setup the paper size and orientation
        $dompdf->setPaper('A4', 'landscape');

        // Render the HTML as PDF
        $dompdf->render();

        // Save PDF locally
        $pdfPath = storage_path('app/reports/user_report.pdf');
        file_put_contents($pdfPath, $dompdf->output());

        // Get URL to the file
        $uploadedFilePath = Storage::url('reports/user_report.pdf');

        return response()->json(['message' => 'The file has been uploaded.', 'path' => $uploadedFilePath]);
    }
}
