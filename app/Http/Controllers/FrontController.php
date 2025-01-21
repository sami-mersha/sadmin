<?php

namespace App\Http\Controllers;

use App\Models\Konser;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index()
    {
        $konsers = Konser::with('tiket')->paginate('6');
        
        // dd($konsers->toArray());
        return view('dashboard', compact('konsers'));
    }
}
