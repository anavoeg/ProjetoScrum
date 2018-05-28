<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //header
    public function home(){
        return view ('home');
    }
    public function feminino(){
        return view ('feminino');
    }
    public function masculino(){
        return view ('masculino');
    }
    public function infantil(){
        return view ('infantil');
    }
    public function calcados(){
        return view ('calcados');
    }
    public function login(){
        return view ('login');
    }
    public function cadastro(){
        return view ('cadastro');
    }
    public function downtown(){
        return view ('downtown');
    }

    //footer
    public function identidade(){
        return view ('identidade');
    }
    public function faleconosco(){
        return view ('faleconosco');
    }
    public function social(){
        return view ('social');
    }

    
    public function test(){
        return view ('test');
    }
}