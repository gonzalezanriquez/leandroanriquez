<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class HolidayController extends Controller
{
    public function index()
    {
        $response = Http::get('https://www.argentina.gob.ar/api/v2/feriados');
        
        if ($response->successful()) {
            $holidays = $response->json();
            return response()->json($holidays);
        } else {
            return response()->json(['error' => 'Unable to fetch holidays'], 500);
        }
    }
}
