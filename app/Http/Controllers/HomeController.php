<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class HomeController extends Controller
{
    public function home()
    {
        return view('Home/home');
    }

    public function reservation()
    {
        return view('Home/reservation');
    }
}
