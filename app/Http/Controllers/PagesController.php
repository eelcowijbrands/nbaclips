<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home()
    {
        return view('welcome', [
            'NBA' => 'NBA Clips'
        ]);
    }

    public function video()
    {
        return view('video');
    }


    public function about()
    {
        return view('about');
    }

    public function contact()
    {
        return view('contact-us');
    }

    
}
