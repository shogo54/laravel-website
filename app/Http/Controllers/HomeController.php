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

    public function aboutPractice()
    {
        return view("home/about_practice");
    }

    public function contact()
    {
        return view("home/contact");
    }

}
