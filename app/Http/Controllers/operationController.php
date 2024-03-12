<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class operationController extends Controller
{

    // Addition
    public function showAddition(): View
    {
        return view('Addition');
    }


    // make addition
    public function makeAddition(Request $request)

    {
        $operation = "Addition";
        $number1 = $request->input('number1');
        $number2 = $request->input('number2');

        $resultat = $number1 + $number2;

        return view('Resultat', compact('number1', 'number2', 'operation', 'resultat'));
    }
 
    public function showMultiplication(): View
    {
        return view('Multiplication');
    }

    // Division
    public function showDivision(): View
    {
        return view('Division');
    }

    // Soustraction
    public function showSoustraction(): View
    {
        return view('Soustraction');
    }


    // Resultat
    public function showResultat(): View
    {
        return view('Resultat');
    }

}
