<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function welcome()
    {
        return view("home/welcome");
    }

    public function about()
    {
        return view("home/about");
    }

    public function aboutCoding()
    {
        return view("/coding/home/about");
    }

    public function contact()
    {
        return view("home/contact");
    }

    public function basics()
    {
        return view("/coding/home/basics");
    }

}
