<?php

  

namespace App\Http\Controllers;

  

use Illuminate\Http\Request;

use App\Models\Contact;

  

class ContactController extends Controller

{

    /**

     * Write code on Method

     *

     * @return response()

     */

    public function index()

    {

        return view('contactForm');

    }

  

    /**

     * Write code on Method

     *

     * @return response()

     */

    public function store(Request $request)

    {

        $request->validate([

            'firstname' => 'required',

            'lastname' => 'required',

            'email' => 'required|email',

            'phone' => 'required|numeric',

            'city' => 'required',

            'message' => 'required',

            'checkbox' => 'required'

        ]);

  

        Contact::create($request->all());

  

        return redirect()->back()

                         ->with(['success' => 'Thank you for contact us. we will contact you shortly.']);
                         

    }

}