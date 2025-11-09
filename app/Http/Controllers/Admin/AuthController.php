<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\AdminLoginRequest;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class AuthController extends Controller
{
    public function showLogin(): View
    {
        return view('admin.pages.login');
    }

    public function ajaxLogin(AdminLoginRequest $request): JsonResponse
    {
        if (! Auth::guard('admin')->attempt($request->validated())) {
            return response()->json([
                'success' => false,
                'message' => 'Kullanıcı adı veya şifre hatalı.',
            ], 422);
        }

        $request->session()->regenerate();

        return response()->json([
            'success' => true,
            'message' => 'Başarıyla giriş yaptınız.',
        ]);
    }
}
