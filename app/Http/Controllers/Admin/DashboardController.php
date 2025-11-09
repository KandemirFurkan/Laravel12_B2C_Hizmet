<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\AdminLoginRequest;
use App\Models\Admin;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\View\View;

class DashboardController extends Controller
{
    public function login(Request $request): View|RedirectResponse
    {
        if ($request->session()->has('admin_id')) {
            return redirect()->route('admin.dashboard');
        }

        return view('admin.pages.login');
    }

    public function authenticate(AdminLoginRequest $request): JsonResponse
    {
        $credentials = $request->validated();

        $admin = Admin::query()
            ->where('username', $credentials['username'])
            ->first();

        if (! $admin || ! Hash::check($credentials['password'], $admin->password)) {
            return response()->json([
                'message' => 'Kullanıcı adı veya şifre hatalı.',
                'errors' => [
                    'username' => ['Kullanıcı adı veya şifre hatalı.'],
                ],
            ], 422);
        }

        $request->session()->regenerate();
        $request->session()->put('admin_id', $admin->id);
        $request->session()->put('admin_username', $admin->username);

        return response()->json([
            'message' => 'Giriş başarılı.',
            'redirect' => route('admin.dashboard'),
        ]);
    }

    public function dashboard(Request $request): View|RedirectResponse
    {
        if (! $request->session()->has('admin_id')) {
            return redirect()->route('admin.login');
        }

        return view('admin.pages.dashboard');
    }

    public function sliders(): View
    {
        return view('admin.pages.slider');
    }

    public function categories(): View
    {
        return view('admin.pages.categories');
    }

    public function blogs(): View
    {
        return view('admin.pages.blogs');
    }

    public function members(): View
    {
        return view('admin.pages.members');
    }

    public function corp_members(): View
    {
        return view('admin.pages.corp_members');
    }

    public function requestforms(): View
    {
        return view('admin.pages.requestforms');
    }

    public function general_set(): View
    {
        return view('admin.pages.general_set');
    }

    public function logout(Request $request): RedirectResponse
    {
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('admin.login');
    }
}
