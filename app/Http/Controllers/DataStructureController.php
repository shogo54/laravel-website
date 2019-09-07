<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DataStructureController extends Controller
{
    public function aboutArray()
    {
        return view('data_structure/array');
    }

    public function aboutList()
    {
        return view('data_structure/list');
    }
}
