<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class AdminController extends Controller
{
    public function home(){
        return view('admin.include.admin-home');
    }
    public function contact(){
        $datas = Contact::get();
        return view('admin.include.contact',compact('datas'));
    }
}
