<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OrteController;

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
Route::get('/schimmelpilz', [OrteController::class, 'schimmelpilz'], function () {
});

Route::get('/', [OrteController::class, 'index'], function () {
});

Route::get('/gewerbeimmobilien', [OrteController::class, 'gewerbeimmobilien'], function () {
});

Route::get('/grundstuecke-und-rechte', [OrteController::class, 'grundstuecke'], function () {
});

Route::get('/landwirtschaftliche-immobilien', [OrteController::class, 'landwirtschaftliche'], function () {
});

Route::get('/sonderimmobilien', [OrteController::class, 'sonderimmobilien'], function () {
});

Route::get('/wohnimmobilien', [OrteController::class, 'wohnimmobilien'], function () {
});
Route::get('/verkehrswertverfahren', [OrteController::class, 'verkehrswertverfahren'], function () {
});
Route::get('/sachwertverfahren', [OrteController::class, 'sachwertverfahren'], function () {
});

Route::get('/ertragswertverfahren', [OrteController::class, 'ertragswertverfahren'], function () {
});

Route::get('/ueber-uns', [OrteController::class, 'ueberuns'], function () {
});
Route::get('/impressum', [OrteController::class, 'impressum'], function () {
});
Route::get('/datenschutzerklaerung', [OrteController::class, 'datenschutzerklaerung'], function () {
});

