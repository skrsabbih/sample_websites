<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;

class HomeController extends Controller
{
    // index method for home page
    public function homepage()
    {
        return view('frontend.home');
    }
}
