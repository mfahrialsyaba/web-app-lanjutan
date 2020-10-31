<?php

namespace App\Http\Controllers;

class FahriduaController extends Controller {
    
    public function satu()
    {
        return view("fahri-1");
    }

    public function dua()
    {
        return view("fahri-2");
    }

    public function tiga()
    {
        return view("fahri-3");
    }
}