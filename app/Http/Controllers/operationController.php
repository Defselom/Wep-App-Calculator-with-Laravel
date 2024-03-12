<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Support\Facades\Validator;

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
         // Définition des règles de validation
         $rules = [
            'number1' => 'required|numeric',
            'number2' => 'required|numeric',
        ];

        // Définition des messages d'erreur personnalisés
        $messages = [
            'number1.required' => 'Le champ Nombre 1 est requis.',
            'number1.numeric' => 'Le champ Nombre 1 doit être un nombre.',
            'number2.required' => 'Le champ Nombre 2 est requis.',
            'number2.numeric' => 'Le champ Nombre 2 doit être un nombre.',
        ];

        $validator = Validator::make($request->all(), $rules, $messages);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator) 
                ->withInput(); 
        }



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
