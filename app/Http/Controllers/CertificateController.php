<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PhpOffice\PhpWord\TemplateProcessor;
use Barryvdh\DomPDF\Facade as PDF;
use Illuminate\Support\Facades\Storage;
use App\Models\User;

class CertificateController extends Controller
{
    
    
        public function index(Request $request)
        {
            $request->validate([
                'template' => 'required|mimes:docx',
            ]);
    
            $path = $request->file('template')->store('templates');
            return redirect()->back();
        }
    
    

    // public function generateCertificate(Request $request)
    // {
    //     $request->validate([
    //         'user_id' => 'required|exists:users,id',
    //     ]);

    //     $user = User::findOrFail($request->user_id);
    //     $templatePath = storage_path('app/templates/template.docx'); // Cambia el nombre según tu archivo

    //     $templateProcessor = new TemplateProcessor($templatePath);
    //     $templateProcessor->setValue('name', $user->name);
    //     $templateProcessor->setValue('lastname', $user->lastname);
    //     // Agrega más campos según sea necesario

    //     $tempFile = tempnam(sys_get_temp_dir(), 'cert');
    //     $templateProcessor->saveAs($tempFile);

    //     $pdf = PDF::loadView('certificate.pdf', ['content' => file_get_contents($tempFile)]);
    //     return $pdf->download('certificado.pdf');
    // }
}
