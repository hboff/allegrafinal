<?php

namespace App\Http\Controllers;


use App\Models\Ort;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\DB;

class OrteatController extends Controller
{
    // Show single lisitng
    public function show($orteDE) {
        $status='at';
        
        $domains = [
            'immobilienbewertung-duisburg.com' => [
                'laengengrad' => [1.0, 12.0],
                'breitengrad' => [10.0, 52.0],
            ],
            'xyz.eu' => [
                'laengengrad' => [1.0, 12.0],
                'breitengrad' => [10.0, 52.0],
            ],
        ];
        
        
        foreach ($domains as $domain => $domainData) {
     
        $data = DB::table('orteat')
        ->whereBetween('laengengrad', $domainData['laengengrad'])
        ->whereBetween('breitengrad', $domainData['breitengrad'])
        ->get();
      
        $expert = DB::table('orteat')
                 ->join('gutachter', function($join) {
                     $join->on('orteat.laengengrad', '>=', 'gutachter.Lon')
                          ->on('orteat.laengengrad', '<=', 'gutachter.Lon2');
                 })
                 ->get();
        
        $cityData = DB::table('orteat')->select('laengengrad', 'breitengrad')->where('ort', $ortat)->first();
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
            FROM orteat
            HAVING distance < 50
            ORDER BY distance
            LIMIT 0 , 16
        "), [$breitengrad, $laengengrad, $breitengrad]);

      
        return view('immobilienbewertung', [
            'nearestCities' => $nearestCities,
            'expert' => $expert,
            'data' => $data,
            'ortsname'=> $orteDE,
            ]);    }  
        }       
        
    public function index() {
        $status='at';
        return view ('index', compact('status'));
    }
    
}