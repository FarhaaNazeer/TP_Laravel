<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AccueilController extends Controller
{
    public function accueil()
    {
        return view('accueil/accueil');
    }

    public function reservation()
    {
        return view('Home/reservation');
    }

    public function contact()
    {
        return view('Home/contact');
    }
}
