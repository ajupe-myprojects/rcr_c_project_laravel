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

    public function posts($id)
    {
        $pages = [
            1 => ['title' => 'Hello from Page 1'],
            2 => ['title' => 'Hello from page 2']
        ];
        return view('post', ['data' => $pages[$id]]);
    }
}
