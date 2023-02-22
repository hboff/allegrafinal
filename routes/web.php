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
        Route::get('/{region}', function($region){
                return view ('immobilienbewertungen', ['ortsname' => $region]);
        });
        Route::get('contact-us', [ContactController::class, 'index']);
        Route::post('contact-us', [ContactController::class, 'store'])->name('contact.us.store');
    foreach ($routes as $route) {
    Route::get($route, function () use ($route, $domainData) {
    
    return view($route);
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