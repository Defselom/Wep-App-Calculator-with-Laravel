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


    // Multiplication
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

}
