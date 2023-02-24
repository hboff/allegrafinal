<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OrteController;
use App\Http\Controllers\OrteatController;

use App\Http\Controllers\ContactController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

$routes = [
        'gewerbeimmobilien',
        'grundstuecke-und-rechte',
        'landwirtschaftliche-immobilien',
        'sonderimmobilien',
        'wohnimmobilien',
        'verkehrswertverfahren',
        'sachwertverfahren',
        'ertragswertverfahren',
        'ueber-uns',
        'impressum',
        'datenschutzerklaerung',
    ];
    
    $domains = [
        'immobilienbewertung-duisburg.com' => [
            'laengengrad' => [6.26, 7.26],
            'breitengrad' => [50.93, 51.93],
        ],
        'immobilienbewertung-kiel.com' => [
            'laengengrad' => [9.63, 10.63],
            'breitengrad' => [54.82, 54.82],
        ],
        'immobilienbewertung-luebeck.com' => [
            'laengengrad' => [10.18, 11.18],
            'breitengrad' => [53.36, 54.36],
        ],        
        'immobilienbewertung-rostock.com' => [
            'laengengrad' => [11.62, 12.62],
            'breitengrad' => [53.59, 54.59],
        ],        
        'immobilienbewertung-braunschweig.eu' => [
            'laengengrad' => [10.02, 11.02],
            'breitengrad' => [51.76, 52.76],
        ],        
        'immobilienbewertung-magdeburg.com' => [
            'laengengrad' => [11.13, 12.13],
            'breitengrad' => [51.63, 52.63],
        ],        
        'immobilienbewertung-halle.com' => [
            'laengengrad' => [11.47, 12.47],
            'breitengrad' => [50.98, 51.98],
        ],        
        'immobilienbewertung-erfurt.eu' => [
            'laengengrad' => [10.52, 11.52],
            'breitengrad' => [50.47, 51.47],
        ],        
        'immobilienbewertung-chemnitz.com' => [
            'laengengrad' => [12.42, 13.42],
            'breitengrad' => [50.33, 51.33],
        ],
        'immobilienbewertung-augsburg.eu' => [
            'laengengrad' => [10.39, 11.39],
            'breitengrad' => [47.86, 48.86],
        ],
        'immobilienbewertung-ludwigsburg.com' => [
            'laengengrad' => [8.68, 9.68],
            'breitengrad' => [48.39, 49.39],
        ],
        'immobilienbewertung-mannheim.com' => [
            'laengengrad' => [7.96, 8.96],
            'breitengrad' => [48.98, 49.98],
        ],        
        'immobilienbewertung-saarbruecken.com' => [
            'laengengrad' => [6.49, 7.49],
            'breitengrad' => [48.73, 49.73],
        ],
                
        'immobilienbewertung-bielefeld.com' => [
            'laengengrad' => [8.03, 9.03],
            'breitengrad' => [51.51, 52.51],
        ],
        'immobilienbewertung-kassel.com' => [
            'laengengrad' => [8.99, 9.99],
            'breitengrad' => [50.81, 51.81],
        ],
    ];
    
    foreach ($domains as $domain => $domainData) {
    Route::domain($domain)->group(function () use ($routes, $domainData) {
        Route::get('/', [OrteatController::class, 'index']);
        Route::get('/immobilienbewertung/{ort}', [OrteatController::class, 'show'], function () use ($domainData) {});
        Route::get('/{region}', function($region){
                return view ('immobilienbewertungen', ['ortsname' => $region]);
        });
        Route::get('contact-us', [ContactController::class, 'index']);
        Route::post('contact-us', [ContactController::class, 'store'])->name('contact.us.store');
    foreach ($routes as $route) {
    Route::get($route, function () use ($route, $domainData) {
    $data = DB::table('orteDE')
    ->whereBetween('laengengrad', $domainData['laengengrad'])
    ->whereBetween('breitengrad', $domainData['breitengrad'])
    ->get();
    
    
    //In a SQL join, the two tables being joined are combined based on the values in a specified column or columns. The ON clause in a join specifies the conditions for combining the rows from the two tables.
    //
    //In the example I provided, the orteat and gutachter tables are joined on the breitengrad column in the orteat table and the Lon and Lon2 columns in the gutachter table. The join is performed using the on method in Laravel's Eloquent ORM, and the conditions are specified as orteat.breitengrad >= gutachter.Lon and orteat.breitengrad <= gutachter.Lon2. This means that only the rows from the orteat table where the breitengrad value falls between the Lon and Lon2 values in the gutachter table will be included in the result set.
    //
    //The result of the join is a single table that includes all columns from both the orteat and gutachter tables. The columns from the orteat table will have the same values for each row, while the name column from the gutachter table will have different values for each row, depending on the matching breitengrad value.
    
    //HIER DIE WHEREBETWEEEN VON $data in $expert einfügen --> denke ich
    $expert = $data = DB::table('orteDE')
               ->join('gutachter', function($join) {
                   $join->on('orteDE.laengengrad', '>=', 'gutachter.Lon')
                        ->on('orteDE.laengengrad', '<=', 'gutachter.Lon2');
               })
               ->get();
               
    return view($route, ['data' => $data, 'expert' => $expert]);
    });
    }
    });
    }











//Route::get('/schimmelpilz', [OrteController::class, 'schimmelpilz'], function () {
//});
//Route::get('/', [OrteController::class, 'index'], function () {
//});
//Route::get('/gewerbeimmobilien', [OrteController::class, 'gewerbeimmobilien'], function () {
//});
//Route::get('/grundstuecke-und-rechte', [OrteController::class, 'grundstuecke'], function () {
//});
//Route::get('/landwirtschaftliche-immobilien', [OrteController::class, 'landwirtschaftliche'], function () {
//});
//Route::get('/sonderimmobilien', [OrteController::class, 'sonderimmobilien'], function () {
//});
//Route::get('/wohnimmobilien', [OrteController::class, 'wohnimmobilien'], function () {
//});
//Route::get('/verkehrswertverfahren', [OrteController::class, 'verkehrswertverfahren'], function () {
//});
//Route::get('/sachwertverfahren', [OrteController::class, 'sachwertverfahren'], function () {
//});
//Route::get('/ertragswertverfahren', [OrteController::class, 'ertragswertverfahren'], function () {
//});
//Route::get('/ueber-uns', [OrteController::class, 'ueberuns'], function () {
//});
//Route::get('/impressum', [OrteController::class, 'impressum'], function () {
//});
//Route::get('/datenschutzerklaerung', [OrteController::class, 'datenschutzerklaerung'], function () {
//});
//Route::get('/immobilienbewertung/{ort}', [OrteController::class, 'show']);
//Route::get('/{region}', function($region){
//        return view ('immobilienbewertungen', ['ortsname' => $region]);
//});
//Route::get('contact-us', [ContactController::class, 'index']);
//Route::post('contact-us', [ContactController::class, 'store'])->name('contact.us.store');