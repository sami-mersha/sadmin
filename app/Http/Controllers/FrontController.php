<?php

namespace App\Http\Controllers;

use App\Models\Konser;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index()
    {
        $konsers = Konser::all();
        return view('dashboard', compact('konsers'));
    }
}
