<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OrteController;
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
        'sachwertverfahren',
        'ertragswertverfahren',
        'ueber-uns',
        'impressum',
        'datenschutzerklaerung',
    ];
    
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
    Route::get('/verkehrswertverfahren', function(){
        return view ('verkehrswertverfahren');
    });
    foreach ($domains as $domain => $domainData) {
    Route::domain($domain)->group(function () use ($routes, $domainData) {
        Route::get('/', [OrteController::class, 'index']);
        Route::get('/immobilienbewertung/{ort}', [OrteController::class, 'show'], function () use ($domainData) {});
        Route::get('/immobilienbewertungen/{region}', function($region){
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