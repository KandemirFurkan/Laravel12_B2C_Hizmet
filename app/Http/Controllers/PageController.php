<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use App\Models\ContactMail;
use App\Models\Hizmetler;
use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

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
        $hizmetlers = Hizmetler::where('status', 1)->get();

        View::share('pageTitle', 'Hizmetler');
        View::share('breadcrumbList', [
            ['title' => 'Hizmetler', 'url' => '#'],
        ]);

        return view('front.pages.hizmetler', compact('hizmetlers'));
    }

    public function hizmetler_detay($slug)
    {
        $hizmetler = Hizmetler::where('slug', $slug)->where('status', 1)->firstOrFail();

        View::share('pageTitle', $hizmetler->title);
        View::share('breadcrumbList', [
            ['title' => 'Hizmetler', 'url' => route('hizmetler')],
            ['title' => $hizmetler->title, 'url' => '#'],
        ]);

        return view('front.pages.hizmetler_detay', compact('hizmetler'));
    }

    public function blog()
    {
        $blogs = Blog::where('status', 1)->get();

        View::share('pageTitle', 'Blog');
        View::share('breadcrumbList', [
            ['title' => 'Blog', 'url' => '#'],
        ]);

        return view('front.pages.blog', compact('blogs'));
    }

    public function blog_detay($slug)
    {
        $blog = Blog::where('slug', $slug)->where('status', 1)->firstOrFail();

        View::share('pageTitle', $blog->title);
        View::share('breadcrumbList', [
            ['title' => 'Blog', 'url' => route('blog')],
            ['title' => $blog->title, 'url' => '#'],
        ]);

        return view('front.pages.blog_detay', compact('blog'));
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

    public function hizmet_ara(Request $request)
    {
        $query = $request->get('q', '');

        if (strlen($query) < 3) {
            return response()->json([]);
        }

        $hizmetler = Hizmetler::where('status', 1)
            ->where('title', 'like', '%'.$query.'%')
            ->limit(10)
            ->get(['id', 'title', 'slug']);

        return response()->json($hizmetler);
    }

    public function iletisim_gonder(Request $request)
    {
        try {
            $validated = $request->validate([
                'name' => 'required|string|max:255',
                'email' => 'required|email|max:255',
                'subject' => 'required|string|max:255',
                'message' => 'required|string',
            ]);

            ContactMail::create([
                'name' => $validated['name'],
                'email' => $validated['email'],
                'subject' => $validated['subject'],
                'message' => $validated['message'],
                'ip_address' => $request->ip(),
                'is_read' => 0,
                'is_replied' => 0,
            ]);

            return response()->json([
                'success' => true,
                'message' => 'Mesajınız başarıyla gönderildi. En kısa sürede size dönüş yapacağız.',
            ]);
        } catch (\Illuminate\Validation\ValidationException $e) {
            return response()->json([
                'success' => false,
                'message' => 'Lütfen tüm alanları doğru şekilde doldurun.',
                'errors' => $e->errors(),
            ], 422);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Bir hata oluştu. Lütfen tekrar deneyin.',
            ], 500);
        }
    }
}
