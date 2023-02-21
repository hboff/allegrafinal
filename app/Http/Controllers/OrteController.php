<?php

namespace App\Http\Controllers;


use App\Models\Ort;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\DB;

class OrteController extends Controller
{
    // Show single lisitng
    public function show($orteDE) {
       
        return view('immobilienbewertung', [
            'ortsname'=> $orteDE,
            ]);    }     
        
    public function index() {
        $status='at';
        return view ('index', compact('status'));
    }
    
}