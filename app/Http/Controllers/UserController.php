<?php

namespace App\Http\Controllers;

use App\Models\User;
use PDF;


use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('index', compact('users'));
    }

    public function downloadPDF()
    {
        $users = User::all();
        $pdf = PDF::loadView('index', compact('users'))->setOptions(['defaultFont' => 'sans-serif']);
        return $pdf->download('report.pdf');
    }

    
}
