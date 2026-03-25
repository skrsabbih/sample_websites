<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;

class HomeController extends Controller
{
    // index method for home page
    public function sampleDesing()
    {
        $projects = [
            [
                'title' => 'Project 1',
                'location' => 'Location 1',
                'price' => 'Starting from BDT 1.8 Cr',
                'image' => asset('assets/images/featured.jpg'),
                'description' => 'Description 1',
            ],
            [
                'title' => 'Project 2',
                'location' => 'Location 2',
                'price' => 'Starting from BDT 1.8 Cr',
                'image' => asset('assets/images/featured.jpg'),
                'description' => 'Description 2',
            ],
            [
                'title' => 'Project 3',
                'location' => 'Location 3',
                'price' => 'Starting from BDT 1.8 Cr',
                'image' => asset('assets/images/featured.jpg'),
                'description' => 'Description 3',
            ]
        ];
        return view('frontend.home', compact('projects'));
    }
}
