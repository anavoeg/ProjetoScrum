<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    
    public function home(){
        return view ('home');
    }
    public function faleconosco(){
        return view ('faleconosco');
    }
    public function form_usuario(){
        return view ('form_usuario');
    }
}