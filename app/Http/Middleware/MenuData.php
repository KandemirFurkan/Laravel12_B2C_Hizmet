<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\Category;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Symfony\Component\HttpFoundation\Response;

class MenuData
{
     public function handle(Request $request, Closure $next)
    {
        View::share('menus', Category::where('status', 1)->get());
        View::share('siteSettings', \App\Models\SiteSettings::first());
        return $next($request);

    }
}
