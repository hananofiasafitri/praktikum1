<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class praktikum1 extends Controller
{
    public function home (){
        return view ("home0149");
    }
    public function url(){
        return view("artikel0149");
    }
    public function contact(){
        return view("contactus0149");
    }
}
