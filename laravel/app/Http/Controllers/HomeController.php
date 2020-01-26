<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        return view('start');
    }

    public function liste()
    {
        return view('list');
    }


}
