<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class PageController extends Controller
{

    public function index()
    {
$categories = Category::where('status', 1)->get();
        return view('front.pages.index', compact('categories'));
    }


    public function hizmetler()
    {
        return view('front.pages.hizmetler');
    }

       public function blog()
    {
        return view('front.pages.blog');
    }

       public function iletisim()
    {
        return view('front.pages.iletisim');
    }

           public function login()
    {
        return view('front.pages.login');
    }
           public function kurumsal_reg()
    {
        return view('front.pages.kurumsal_reg');
    }
           public function bireysel_reg()
    {
        return view('front.pages.bireysel_reg');
    }



}
