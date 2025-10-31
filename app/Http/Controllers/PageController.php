<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Slider;
use App\Models\Category;
use App\Models\Hizmetler;
use Illuminate\Http\Request;

class PageController extends Controller
{

    public function index()
    {
$categories = Category::where('status', 1)->get();
$sliders = Slider::where('status', 1)->get();
$hizmetlers = Hizmetler::where('status', 1)
->limit(8)
->get();
$blogs = Blog::where('status', 1)
    ->orderBy('id', 'desc')
    ->limit(4)
    ->get();

        return view('front.pages.index', compact('categories', 'sliders', 'hizmetlers', 'blogs'));
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
