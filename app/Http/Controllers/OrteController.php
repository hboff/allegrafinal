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
            
        
        $cityData = DB::table('orteDE')->select('laengengrad', 'breitengrad')->where('ort', $orteDE)->first();
        $laengengrad = $cityData->laengengrad;
        $breitengrad = $cityData->breitengrad;

        $nearestCities = DB::select(DB::raw("
            SELECT ort, (
                3959 * acos (
                    cos ( radians(?) )
                    * cos( radians( breitengrad ) )
                    * cos( radians( laengengrad ) - radians(?) )
                    + sin ( radians(?) )
                    * sin( radians( breitengrad ) )
                )
            ) AS distance
            FROM orteDE
            HAVING distance < 50
            ORDER BY distance
            LIMIT 0 , 16
        "), [$breitengrad, $laengengrad, $breitengrad]);

      
        return view('immobilienbewertung', [
            'nearestCities' => $nearestCities,
            'ortsname'=> $orteDE,
            ]);    }  
        }       
        
    public function index() {
        $status='at';
        return view ('index', compact('status'));
    }
    
}