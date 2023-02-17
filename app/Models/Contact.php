<?php

  

namespace App\Models;

  

use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Database\Eloquent\Model;

use Mail;

use App\Mail\ContactMail;

  

class Contact extends Model

{

    use HasFactory;

  

    public $fillable = ['lastname', 'email', 'phone', 'firstname','city', 'objecttype', 'message'];

  

    /**

     * Write code on Method

     *

     * @return response()

     */

    public static function boot() {

  

        parent::boot();

  

        static::created(function ($item) {

                

            $adminEmail = "oskar_lohse@baucampus.de";

            Mail::to($adminEmail)->send(new ContactMail($item));

        });

    }

}