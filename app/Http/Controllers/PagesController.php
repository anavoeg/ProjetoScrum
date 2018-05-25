<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    
    public function home(){
        return view ('pages.home');
    }
    public function faleconosco(){
        return view ('pages.faleconosco');
    }
    public function index(){
        return view ('pages.home');
    }
}