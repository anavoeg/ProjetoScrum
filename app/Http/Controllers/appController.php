<?php

namespace App\Http\Controllers;

use App\Mail\mailContact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;


class appController extends Controller
{
    //
    public function sendEmail(Request $request){
        //enviar email

        Mail::to('servidor@hotmail.com')->send(new mailContact($request));
        return redirect('/');
    }
}
