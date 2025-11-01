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
                
                <!-- Bilgilendirme Mesajı -->
                <div id="registerFormMessage" class="alert d-none mb-3" role="alert"></div>
                
                <form id="registerForm" class="row g-3" novalidate>
                  <div class="col-12">
                    <label class="form-label" for="regName">Ad Soyad <span class="text-danger">*</span></label>
                    <input class="form-control" type="text" name="name" id="regName" placeholder="Adınız Soyadınız" required>
                    <div class="invalid-feedback">
                      Lütfen ad soyad bilginizi girin.
                    </div>
                  </div>
                  <div class="col-12">
                    <label class="form-label" for="regEmail">E-posta <span class="text-danger">*</span></label>
                    <input class="form-control" type="email" name="email" id="regEmail" placeholder="ornek@mail.com" required>
                    <div class="invalid-feedback">
                      Lütfen geçerli bir e-posta adresi girin.
                    </div>
                  </div>
                  <div class="col-12">
                    <label class="form-label" for="regPassword">Şifre <span class="text-danger">*</span></label>
                    <input class="form-control" type="password" name="password" id="regPassword" placeholder="••••••••" required minlength="6">
                    <div class="invalid-feedback">
                      Şifreniz en az 6 karakter olmalıdır.
                    </div>
                  </div>
                  <div class="col-12 d-grid">
                    <button class="btn btn-primary" type="submit" id="registerSubmitBtn">
                      <span class="spinner-border spinner-border-sm d-none me-2" role="status" aria-hidden="true"></span>
                      Kayıt Ol
                    </button>
                  </div>
                </form>
                <div class="mt-3 small">
                  Zaten hesabın var mı? <a href="{{ route('login') }}">Giriş yap</a>
                </div>

              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
@endsection
