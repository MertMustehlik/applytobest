<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Settings;

class FrontController extends Controller
{
    function __construct(){
        view()->share('settings',Settings::find(1));   
    }
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
