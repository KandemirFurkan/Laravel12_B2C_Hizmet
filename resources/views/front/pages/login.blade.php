@extends('front.layouts.app')

@section('content')
        <section class="bg-light py-4 border-bottom">
      <div class="container">
        <h1 class="h3 mb-2">Giriş Yap</h1>
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item"><a href="index.html">Ana Sayfa</a></li>
            <li class="breadcrumb-item active" aria-current="page">Giriş Yap</li>
          </ol>
        </nav>
      </div>
    </section>

    <section class="py-5">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-12 col-md-8 col-lg-5">
            <div class="card shadow-sm">
              <div class="card-body p-4 p-lg-5">
                <h2 class="h4 mb-4">Hesabınıza giriş yapın</h2>
                <form id="loginForm" class="row g-3" novalidate>
                  <div class="col-12">
                    <label class="form-label" for="loginEmail">E-posta</label>
                    <input class="form-control" type="email" id="loginEmail" placeholder="ornek@mail.com" required>
                  </div>
                  <div class="col-12">
                    <label class="form-label" for="loginPassword">Şifre</label>
                    <input class="form-control" type="password" id="loginPassword" placeholder="••••••••" required>
                  </div>
                  <div class="col-12 d-grid">
                    <button class="btn btn-primary" type="submit">Giriş Yap</button>
                  </div>
                </form>

              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
@endsection
