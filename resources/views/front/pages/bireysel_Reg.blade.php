@extends('front.layouts.app')

@section('content')
        <section class="bg-light py-4 border-bottom">
      <div class="container">
        <h1 class="h3 mb-2">Kayıt Ol</h1>
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item"><a href="{{ route('anasayfa') }}">Ana Sayfa</a></li>
            <li class="breadcrumb-item active" aria-current="page">Kayıt Ol</li>
          </ol>
        </nav>
      </div>
    </section>

    <section class="py-5">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-12 col-md-8 col-lg-6">
            <div class="card shadow-sm">
              <div class="card-body p-4 p-lg-5">
                <h2 class="h4 mb-4">Yeni bir hesap oluşturun</h2>
                <form id="registerForm" class="row g-3" novalidate>
                  <div class="col-12">
                    <label class="form-label" for="regName">Ad Soyad</label>
                    <input class="form-control" type="text" id="regName" placeholder="Adınız Soyadınız" required>
                  </div>
                  <div class="col-12">
                    <label class="form-label" for="regEmail">E-posta</label>
                    <input class="form-control" type="email" id="regEmail" placeholder="ornek@mail.com" required>
                  </div>
                  <div class="col-12">
                    <label class="form-label" for="regPassword">Şifre</label>
                    <input class="form-control" type="password" id="regPassword" placeholder="••••••••" required>
                  </div>
                  <div class="col-12 d-grid">
                    <button class="btn btn-primary" type="submit">Kayıt Ol</button>
                  </div>
                </form>
                <div class="mt-3 small">
                  Zaten hesabın var mı? <a href="login.html">Giriş yap</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
@endsection
