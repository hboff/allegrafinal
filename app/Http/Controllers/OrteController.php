<?php

namespace App\Http\Controllers;


use App\Models\Ort;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\DB;

class OrteController extends Controller
{
    // Show single lisitng
    public function show($ortDE) {
        
        $cityData = DB::table('orteDE')->select('laengengrad', 'breitengrad')->where('ort', $ortDE)->first();
        $laengengrad = $cityData->laengengrad;
        $breitengrad = $cityData->breitengrad;

        $nearestCities = DB::table('orteDE')
->select('ort', DB::raw("(3959 * acos(cos(radians(?)) * cos(radians(breitengrad)) * cos(radians(laengengrad) - radians(?)) + sin(radians(?)) * sin(radians(breitengrad)))) AS distance"))
->having('distance', '<', 50)
->orderBy('distance')
->limit(16)
->setBindings([$breitengrad, $laengengrad, $breitengrad])
->get();
      
        return view('immobilienbewertung', [
            'nearestCities' => $nearestCities,
            'ortsname'=> $ortDE,
            ]);    }  
        
    public function index() {
        $status='at';
        return view ('index', compact('status'));
    }
    
}