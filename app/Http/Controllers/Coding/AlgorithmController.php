<?php

namespace App\Http\Controllers\Coding;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AlgorithmController extends Controller
{

    public function codingBfs(){
        return view("coding/algorithm/bfs");
    }

    public function codingDfs(){
        return view("coding/algorithm/dfs");
    }

}