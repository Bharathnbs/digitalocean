<?php

namespace App\Http\Controllers;

class PageController extends Controller
{
    public function home()
    {
        return view('landing');
    }

    public function about()
    {
        return view('about');
    }
}
