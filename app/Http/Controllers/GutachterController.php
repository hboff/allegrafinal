<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gutachter;

class GutachterController extends Controller
{
    public function index() {

        $data = Gutachter::all();

        return view('unterseiten.gutachter');
    }
public function show($gutachter) {
    return view('gutachter.index', [
        'name'=> $gutachter,
        'lastname'=> $gutachter
        ]);    }        

}
