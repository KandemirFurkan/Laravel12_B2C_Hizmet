<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\View\View;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.pages.login');
    }

    public function dashboard()
    {
        return view('admin.pages.dashboard');
    }

    public function sliders()
    {
        return view('admin.pages.slider');
    }

    public function categories()
    {
        return view('admin.pages.categories');
    }

    public function blogs()
    {
        return view('admin.pages.blogs');
    }

    public function members()
    {
        return view('admin.pages.members');
    }

    public function corp_members()
    {
        return view('admin.pages.corp_members');
    }

    public function requestforms()
    {
        return view('admin.pages.requestforms');
    }

    public function general_set()
    {
        return view('admin.pages.general_set');
    }

}
