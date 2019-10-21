<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BasicsController extends Controller
{
    public function primitiveAndReference()
    {
        return view('basics/primitive_and_reference');
    }

    public function aboutList()
    {
        return view('data_structure/list');
    }
}
