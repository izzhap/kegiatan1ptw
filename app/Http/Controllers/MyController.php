<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
    function index()
    {
        return view('home_0241');
    }

    function artikel()
    {
        return view('artikel_0241');
    }
    function contact()
    {
        return view('contact_0241');
    }
}