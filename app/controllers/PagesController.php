<?php

namespace App\Controllers;

class PagesController
{
    public function home()
    {
        return view('home');
    }

    public function about()
    {
        return view('about');
    }
}
