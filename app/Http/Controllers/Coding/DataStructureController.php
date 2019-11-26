<?php

namespace App\Http\Controllers\Coding;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DataStructureController extends Controller
{
    public function codingArray()
    {
        return view("/coding/data_structure/array");
    }

}