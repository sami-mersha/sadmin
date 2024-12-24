<?php

namespace App\Http\Controllers;

use App\Models\konser;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index()
    {
        $konsers = konser::all();
        return view('dashboard', compact('konsers'));
    }
}
