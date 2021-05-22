<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainControll extends Controller
{
   public function index(){
        return view('index');
    }
    public function artikel(){
        return view('artikel');
    }
    public function kontak(){
        return view('kontak');
    }    
}
