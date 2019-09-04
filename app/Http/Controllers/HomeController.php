<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function welcome()
    {
        return view('home/welcome');
    }

    public function about()
    {
        return view('home/about');
    }

    public function howToUse()
    {
        return view('home/how_to_use');
    }

    public function contact()
    {
        return view('home/contact');
    }

}
