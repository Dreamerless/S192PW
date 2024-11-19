<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RepasoController extends Controller
{
    public function convert(Request $request)
    {
        $value = $request->input('value');
        $conversionType = $request->input('conversion_type');

        if ($conversionType === 'mb_to_gb') {
            $result = $value / 1024; 
            $resultText = $value . ' MB es igual a ' . $result . ' GB';
        } elseif ($conversionType === 'gb_to_mb') {
            $result = $value * 1024; 
            $resultText = $value . ' GB es igual a ' . $result . ' MB';
        } else {
            $resultText = 'Conversión no válida';
        }

        return view('repaso1', ['resultText' => $resultText]);
    }
}
