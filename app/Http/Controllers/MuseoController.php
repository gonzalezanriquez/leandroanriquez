<?php

// app/Http/Controllers/MuseoController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class MuseoController extends Controller
{
    public function index()
    {
        $response = Http::get('https://www.cultura.gob.ar/api/v2.0/museos/');
        
        if ($response->successful()) {
            $museos = $response->json();
            return view('museos.index', compact('museos'));
        } else {
            return response()->json(['error' => 'Unable to fetch museums'], 500);
        }
    }
}
