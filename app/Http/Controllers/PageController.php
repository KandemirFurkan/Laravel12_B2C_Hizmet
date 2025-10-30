<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{

    public function index()
    {
        return view('front.pages.index');
    }


    public function hizmetler()
    {
        return view('front.pages.hizmetler');
    }
}
