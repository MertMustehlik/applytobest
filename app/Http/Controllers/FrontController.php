<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function branding(){
        return view('include.branding');
    }
    public function content(){
        return view('include.content');
    }
    public function design(){
        return view('include.design');
    }
    public function technology(){
        return view('include.technology');
    }
    public function contact(){
        return view('include.contact');
    }
}
