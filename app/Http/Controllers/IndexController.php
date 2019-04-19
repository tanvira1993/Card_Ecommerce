<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    public function Index(){
        return view('master');
    }

    public function Master(){
        return view('index');
    }
}
