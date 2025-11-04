<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Models\Blog;
use App\Models\Category;
use App\Models\ContactMail;
use App\Models\Hizmetler;
use App\Models\Slider;
use App\Models\TalepForm;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
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

    public function login_post(LoginRequest $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials, $request->boolean('remember'))) {
            $request->session()->regenerate();

            $user = Auth::user();
            $user->update(['login_ip' => $request->ip()]);

            // Role'e göre yönlendirme
            $role = (string) $user->role;

            if ($role === '1') {
                return redirect()->route('tekliflerim')->with('success', 'Başarıyla giriş yaptınız.');
            } elseif ($role === '2') {
                return redirect()->route('talepler')->with('success', 'Başarıyla giriş yaptınız.');
            }

            // Role tanımlı değilse varsayılan olarak talepler sayfasına yönlendir
            /*   return redirect()->route('tekliflerim')->with('success', 'Başarıyla giriş yaptınız.');
        */
        }

        return back()->withErrors([
            'email' => 'E-posta adresi veya şifre hatalı.',
        ])->onlyInput('email');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('anasayfa')->with('success', 'Başarıyla çıkış yaptınız.');
    }

    public function kurumsal_reg()
    {
        $sectors = Hizmetler::where('status', 1)->get();

        return view('front.pages.kurumsal_reg', compact('sectors'));
    }

    public function bireysel_reg()
    {
        return view('front.pages.bireysel_Reg');
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

    public function bireysel_kayit(Request $request)
    {
        try {
            $validated = $request->validate([
                'name' => 'required|string|max:255',
                'email' => 'required|email|max:255|unique:users,email',
                'phone' => 'required|string|size:11',
                'location' => 'required|string|max:255',
                'password' => 'required|string|min:6',
            ]);

            User::create([
                'name' => $validated['name'],
                'email' => $validated['email'],
                'phone' => $validated['phone'],
                'location' => $validated['location'],
                'password' => Hash::make($validated['password']),
                'registration_date' => now(),
                'role' => 1,
                'status' => 1,
                'login_ip' => $request->ip(),
            ]);

            return response()->json([
                'success' => true,
                'message' => 'Kaydınız başarıyla oluşturuldu! Giriş yapabilirsiniz.',
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
                'message' => 'Kayıt sırasında bir hata oluştu. Lütfen tekrar deneyin.',
            ], 500);
        }
    }

    public function kurumsal_kayit(Request $request)
    {
        try {
            // E-posta kontrolü
            if (User::where('email', $request->email)->exists()) {
                return response()->json([
                    'success' => false,
                    'message' => 'Bu e-posta adresi zaten kayıtlı. Lütfen farklı bir e-posta adresi kullanın.',
                ], 422);
            }

            $validated = $request->validate([
                'name' => 'required|string|max:255',
                'email' => 'required|email|max:255',
                'phone' => 'required|string|size:11',
                'sector' => 'required|string|max:255',
                'location' => 'required|string|max:255',
                'content' => 'required|string|min:30',
            ]);

            User::create([
                'name' => $validated['name'],
                'email' => $validated['email'],
                'phone' => $validated['phone'],
                'sector' => $validated['sector'],
                'location' => $validated['location'],
                'content' => $validated['content'],
                'password' => Hash::make('temp'.rand(1000, 9999)),
                'registration_date' => now(),
                'role' => 2,
                'status' => 0,
                'login_ip' => $request->ip(),
            ]);

            return response()->json([
                'success' => true,
                'message' => 'Başvurunuz başarıyla gönderildi! Onay sürecinden sonra size dönüş yapacağız.',
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
                'message' => 'Başvuru sırasında bir hata oluştu. Lütfen tekrar deneyin.',
            ], 500);
        }
    }

    public function tekliflerim()
    {
        return view('front.pages.tekliflerim');
    }

    public function teklif_detay(Request $request)
    {

        $id = $request->query('id'); // GET parametresini alır

        // $teklif = Teklif::find($id);
        return view('front.pages.teklif_detay', compact('id'));
    }

    public function talepler()
    {
        return view('front.pages.talepler');
    }

    public function talep_gonder(Request $request): \Illuminate\Http\JsonResponse
    {
        try {
            $validated = $request->validate([
                'mesaj' => 'required|string|min:10',
                'kategori' => 'required|string|max:255',
                'sehir' => 'required|string|max:255',
            ]);

            // Kullanıcı bilgilerini session'dan al
            $user = Auth::user();

            if (! $user) {
                return response()->json([
                    'success' => false,
                    'message' => 'Oturum bulunamadı. Lütfen giriş yapın.',
                ], 401);
            }

            // Kullanıcı bilgilerini veritabanından çek
            $user = User::find($user->id);

            if (! $user) {
                return response()->json([
                    'success' => false,
                    'message' => 'Kullanıcı bulunamadı.',
                ], 404);
            }

            // Talep formunu kaydet
            TalepForm::create([
                'name' => $user->name,
                'email' => $user->email,
                'phone' => $user->phone,
                'sector' => $validated['kategori'],
                'location' => $validated['sehir'],
                'message' => $validated['mesaj'],
                'ip_address' => $request->ip(),
                'user_id' => (string) $user->id,
                'status' => '0',
            ]);

            return response()->json([
                'success' => true,
                'message' => 'Talebiniz başarıyla gönderildi! En kısa sürede size dönüş yapacağız.',
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
                'message' => 'Talep gönderilirken bir hata oluştu. Lütfen tekrar deneyin.',
            ], 500);
        }
    }
}
